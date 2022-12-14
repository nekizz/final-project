package cmd

import (
	"fmt"

	"github.com/spf13/cobra"
)

var migrationCmd = &cobra.Command{
	Use:   "migration",
	Short: "room service migration command",
	Run: func(cmd *cobra.Command, args []string) {
		fmt.Println("room service migration command called")
	},
}

func init() {
	rootCmd.AddCommand(migrationCmd)
}
