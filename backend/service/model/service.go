package model

import "gorm.io/gorm"

type Service struct {
	gorm.Model
	Name  string
	Unity string
	Price float64
}
