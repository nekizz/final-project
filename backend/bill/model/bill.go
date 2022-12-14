package model

import "gorm.io/gorm"

type Bill struct {
	gorm.Model
	TotalAmount int
	Note        string
	Discount    float64
}
