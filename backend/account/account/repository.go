package account

import (
	"github.com/nekizz/final-project/backend/account/model"
	"google.golang.org/grpc/codes"
	"google.golang.org/grpc/status"
	"gorm.io/gorm"
)

type Repository struct {
	db *gorm.DB
}

func NewRepository(db *gorm.DB) *Repository {
	return &Repository{db: db}
}

func (r *Repository) RegistAccount(p *model.Account) (*model.Account, error) {
	var count int64

	query := r.db.Model(&model.Account{}).Where("username = ?", p.Username).Count(&count)
	if err := query.Error; nil != err {
		return nil, err
	}
	if count == 0 {
		query = r.db.Model(&model.Account{}).Create(p)
		if err := query.Error; nil != err {
			return nil, err
		}
		return p, nil
	} else {
		return &model.Account{}, status.Error(codes.InvalidArgument, "This username is already exsist")
	}
}
