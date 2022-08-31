package model

import "gorm.io/gorm"

type Account struct {
	gorm.Model
	Name    string
	Email   string
	Address string
	Phone   string
	Note    string
}