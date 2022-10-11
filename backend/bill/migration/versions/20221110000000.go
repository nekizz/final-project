package versions

import (
	"gorm.io/gorm"
)

func Version20221110000000(tx *gorm.DB) error {
	type Bill struct {
		gorm.Model
		TotalAmount float64 `gorm:"TYPE:DOUBLE"`
		Discount    float64 `gorm:"TYPE:DOUBLE"`
		Note        string  `gorm:"TYPE:VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci"`
	}

	return tx.AutoMigrate(&Bill{})
}
