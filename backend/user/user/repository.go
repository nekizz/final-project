package user

import (
	"github.com/nekizz/final-project/backend/user/model"
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

func (r *Repository) CreateOne(p *model.User) (*model.User, error) {
	var count int64

	query := r.db.Model(&model.User{}).Where("username = ?", p.Username).Count(&count)
	if err := query.Error; nil != err {
		return nil, err
	}
	if count == 0 {
		query = r.db.Model(&model.User{}).Create(p)
		if err := query.Error; nil != err {
			return nil, err
		}
		return p, nil
	} else {
		return &model.User{}, status.Error(codes.InvalidArgument, "This username is already exsist")
	}
}

func (r *Repository) UpdateOne(id int, c *model.User) (*model.User, error) {
	query := r.db.Model(&model.User{}).Where("id = ?", id).UpdateColumns(getModel(uint(id), c))

	if err := query.Error; nil != err {
		return nil, err
	}

	return c, nil
}

func (r *Repository) FindOne(id int) (*model.User, error) {
	var user model.User

	query := r.db.Model(&model.User{}).Where("id = ?", id).Find(&user)
	if err := query.Error; nil != err {
		return nil, err
	}

	return &user, nil
}
