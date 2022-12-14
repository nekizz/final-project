package model

import "gorm.io/gorm"

type UsedService struct {
	gorm.Model
	Price       float64
	Quantity    int
	TotalAmount float64
}
