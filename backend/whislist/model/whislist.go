package model

import "gorm.io/gorm"

type Whislist struct {
	gorm.Model
	HotelID    uint
	CustomerID uint
}
