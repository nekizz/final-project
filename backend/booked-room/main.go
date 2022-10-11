package main

import (
	"fmt"
	"github.com/n3kizz/final-project/backend/booked-room/migration"
	"gorm.io/driver/mysql"
	"gorm.io/gorm"
	"os"
	"time"
)

//func main() {
//	cmd.Execute()
//}

func main() {
	MigrateDB()

}

func MigrateDB() error {
	dsn := "root:123456@tcp(127.0.0.1:3306)/migration?charset=utf8mb4&parseTime=True&loc=Local"
	orm, err := gorm.Open(mysql.New(mysql.Config{DSN: dsn}), &gorm.Config{})
	postgresDB, err := orm.DB()
	if err != nil {
		panic(err)
	}

	postgresDB.SetConnMaxLifetime(300 * time.Minute)
	postgresDB.SetMaxIdleConns(10)
	postgresDB.SetMaxOpenConns(15)

	defer func() {
		if err := postgresDB.Close(); err != nil {
			panic(err)
		}
	}()

	fmt.Println("mysql connection established")

	err = migration.Migrate(orm)
	if err != nil {
		fmt.Println(err)
		return err
		os.Exit(1)
	}

	fmt.Println("migration successful")

	return nil
}
