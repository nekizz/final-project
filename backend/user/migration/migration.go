package migration

import (
	"github.com/go-gormigrate/gormigrate/v2"
	"github.com/n3kizz/final-project/backend/user/migration/versions"
	"gorm.io/gorm"
)

func Migrate(db *gorm.DB) error {
	m := gormigrate.New(db, gormigrate.DefaultOptions, []*gormigrate.Migration{
		{
			ID:      "20221110000008",
			Migrate: versions.Version20221110000008,
		},
	})

	return m.Migrate()
}
