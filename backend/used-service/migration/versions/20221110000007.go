package versions

import (
	"gorm.io/gorm"
)

func Version20221110000007(tx *gorm.DB) error {
	type UsedService struct {
		gorm.Model
		Price       float64 `gorm:"TYPE:DOUBLE"`
		Quantity    uint    `gorm:"TYPE:INT"`
		TotalAmount float64 `gorm:"TYPE:DOUBLE"`
	}

	return tx.AutoMigrate(&UsedService{})
}
