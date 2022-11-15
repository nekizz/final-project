package model

import "gorm.io/gorm"

type Employee struct {
	gorm.Model
	User        User
	Role        string
	Description string
}
