package versions

import (
	"gorm.io/gorm"
)

func Version20221110000001(tx *gorm.DB) error {
	type BookedRoom struct {
		gorm.Model
		CheckIn   string  `gorm:"TYPE:VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci"`
		CheckOut  string  `gorm:"TYPE:VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci"`
		Price     float64 `gorm:"TYPE:DOUBLE"`
		Discount  float64 `gorm:"TYPE:DOUBLE"`
		IsCheckIn string  `gorm:"TYPE:VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci"`
	}

	return tx.AutoMigrate(&BookedRoom{})
}
