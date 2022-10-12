package cmd

import (
	"context"
	"fmt"
	"net/http"
	"os"
	"os/signal"
	"syscall"
	"time"

	"github.com/grpc-ecosystem/grpc-gateway/runtime"
	"github.com/sirupsen/logrus"
	"github.com/spf13/cobra"
	"github.com/spf13/viper"
	"google.golang.org/grpc"

	pb "github.com/nekizz/final-project/backend/go-pbtype/user"
)

var restCmd = &cobra.Command{
	Use:   "rest",
	Short: "user service serve rest command",
	Run:   runRestCommand,
}

func init() {
	serveCmd.AddCommand(restCmd)

	restCmd.Flags().StringP("backend", "", "backend", "grpc backend address")
	restCmd.Flags().StringP("address", "", "address", "rest gateway address")

	_ = viper.BindPFlag("address", restCmd.Flags().Lookup("address"))
	_ = viper.BindPFlag("backend", restCmd.Flags().Lookup("backend"))
}

func runRestCommand(cmd *cobra.Command, args []string) {
	ctx := context.Background()
	c := make(chan os.Signal, 1)
	signal.Notify(c, os.Interrupt, syscall.SIGINT, syscall.SIGTERM)

	address := viper.GetString("address")
	backend := viper.GetString("backend")

	mux := http.NewServeMux()
	GatewayMux := runtime.NewServeMux()

	go func() {
		opts := []grpc.DialOption{grpc.WithInsecure()}
		initializeGatewayService(ctx, GatewayMux, backend, opts)
	}()

	mux.Handle("/", GatewayMux)
	srv := &http.Server{
		Addr:         address,
		Handler:      mux,
		IdleTimeout:  60 * time.Second,
		ReadTimeout:  20 * time.Second,
		WriteTimeout: 20 * time.Second,
	}

	go func() {
		err := srv.ListenAndServe()
		if nil != err {
			panic(err)
		}
	}()

	logrus.WithFields(logrus.Fields{
		"service": "user-service",
		"type":    "rest",
	}).Info("user service server started")

	<-c
	ctx, cancel := context.WithCancel(ctx)
	defer cancel()

	logrus.WithFields(logrus.Fields{
		"service": "user-service",
		"type":    "rest",
	}).Info("user service gracefully shutdowns")
}

func initializeGatewayService(ctx context.Context, gw *runtime.ServeMux, endpoint string, opts []grpc.DialOption) {
	userGwErr := pb.RegisterUserServiceHandlerFromEndpoint(ctx, gw, endpoint, opts)
	if nil != userGwErr {
		fmt.Println(userGwErr)
		os.Exit(1)
	}

	customerGwErr := pb.RegisterEmployeeServiceHandlerFromEndpoint(ctx, gw, endpoint, opts)
	if nil != customerGwErr {
		fmt.Println(customerGwErr)
		os.Exit(1)
	}

	employeeGwErr := pb.RegisterEmployeeServiceHandlerFromEndpoint(ctx, gw, endpoint, opts)
	if nil != employeeGwErr {
		fmt.Println(employeeGwErr)
		os.Exit(1)
	}
}
