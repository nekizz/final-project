package model

import "gorm.io/gorm"

type Employee struct {
	gorm.Model
	Role        string
	Salary      float64
	Description string
}
