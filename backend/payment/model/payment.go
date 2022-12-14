package model

import (
	"gorm.io/gorm"
	"time"
)

type Payment struct {
	gorm.Model
	PaymentDate time.Time
	PaymentType string
	Note        string
}
