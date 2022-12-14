package model

import "gorm.io/gorm"

type Account struct {
	gorm.Model
	Name        string
	Type        string
	Price       float64
	Description string
}
