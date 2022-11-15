package model

import "gorm.io/gorm"

type Customer struct {
	gorm.Model
	User        User
	CardNumber  string
	Description string
}
