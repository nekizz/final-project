package model

import "gorm.io/gorm"

type User struct {
	gorm.Model
	Avatar   string
	Username string
	Password string
	Token    string
	Name     string
	Email    string
	Address  string
	Phone    string
	About    string
	Note     string
}
