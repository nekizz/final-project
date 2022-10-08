package model

import "gorm.io/gorm"

type Account struct {
	gorm.Model
	Avatar  string
	Name    string
	Email   string
	Address string
	Phone   string
	About   string
	Note    string
}
