package cmd

import (
	"fmt"

	"github.com/spf13/cobra"
)

var migrationCmd = &cobra.Command{
	Use:   "migration",
	Short: "payment service migration command",
	Run: func(cmd *cobra.Command, args []string) {
		fmt.Println("payment service migration command called")
	},
}

func init() {
	rootCmd.AddCommand(migrationCmd)
}
