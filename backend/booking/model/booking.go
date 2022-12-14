package model

import (
	"gorm.io/gorm"
	"time"
)

type Booking struct {
	gorm.Model
	BookDay     time.Time
	TotalAmount int
	Note        string
	Discount    float64
}
