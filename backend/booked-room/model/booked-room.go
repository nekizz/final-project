package model

import (
	"gorm.io/gorm"
	"time"
)

type BookedRoom struct {
	gorm.Model
	CheckIn   time.Time
	CheckOut  time.Time
	Price     float64
	Discount  float64
	IsCheckIn bool
}
