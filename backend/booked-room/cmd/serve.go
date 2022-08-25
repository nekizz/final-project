package cmd

import (
	"fmt"

	"github.com/spf13/cobra"
)

var serveCmd = &cobra.Command{
	Use:   "serve",
	Short: "bookedroom service serve command",
	Run: func(cmd *cobra.Command, args []string) {
		fmt.Println("bookedroom service serve command called")
	},
}

func init() {
	rootCmd.AddCommand(serveCmd)
}
