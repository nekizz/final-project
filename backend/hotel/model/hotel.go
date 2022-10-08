package model

import "gorm.io/gorm"

type Hotel struct {
	gorm.Model
	Name        string
	StarLevel   int
	Address     string
	Rate        string
	Rule        string
	Comment     string
	Description string
}
