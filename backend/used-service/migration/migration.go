package migration

import (
	"github.com/go-gormigrate/gormigrate/v2"
	"github.com/nekizz/final-project/backend/used-service/migration/versions"
	"gorm.io/gorm"
)

func Migrate(db *gorm.DB) error {
	m := gormigrate.New(db, gormigrate.DefaultOptions, []*gormigrate.Migration{
		{
			ID:      "20221110000007",
			Migrate: versions.Version20221110000007,
		},
	})

	return m.Migrate()
}
