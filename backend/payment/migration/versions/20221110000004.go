package versions

import (
	"gorm.io/gorm"
)

func Version20221110000004(tx *gorm.DB) error {
	type Payment struct {
		gorm.Model
		PaymentDate   string `gorm:"TYPE:VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci"`
		PayemntType   string `gorm:"TYPE:VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci"`
		PaymentStatus string `gorm:"TYPE:VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci"`
		Note          string `gorm:"TYPE:VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci"`
	}

	return tx.AutoMigrate(&Payment{})
}
