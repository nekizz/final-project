package versions

import (
	"gorm.io/gorm"
)

func Version20221110000003(tx *gorm.DB) error {
	type Hotel struct {
		gorm.Model
		Name        string  `gorm:"TYPE:VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci"`
		StarLevel   float64 `gorm:"TYPE:INT"`
		Address     string  `gorm:"TYPE:VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci"`
		Rate        float64 `gorm:"TYPE:DOUBLE"`
		Comment     string  `gorm:"TYPE:VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci"`
		Rule        string  `gorm:"TYPE:VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci"`
		Description string  `gorm:"TYPE:VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci"`
	}

	return tx.AutoMigrate(&Hotel{})
}
