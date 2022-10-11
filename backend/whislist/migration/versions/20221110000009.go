package versions

import (
	"gorm.io/gorm"
)

func Version20221110000009(tx *gorm.DB) error {
	type Whislist struct {
		gorm.Model
		HotelID  uint
		Customer uint
	}

	return tx.AutoMigrate(&Whislist{})
}
