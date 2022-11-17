package user

import (
	"fmt"
	pb "github.com/nekizz/final-project/backend/go-pbtype/user"
	"github.com/nekizz/final-project/backend/user/constant"
	"github.com/nekizz/final-project/backend/user/model"
	"google.golang.org/grpc/codes"
	"google.golang.org/grpc/status"
	"gorm.io/gorm"
	"strings"
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
		//init transaction
		tx := r.db.Begin()
		query = tx.Model(&model.User{}).Create(p)
		if err := query.Error; nil != err {
			tx.Rollback()
			return nil, err
		}

		//TODO: pbtype add classify employee or customer
		var isCustomer bool
		if isCustomer {
			queryCustomer := tx.Model(&model.Customer{}).Create(model.Customer{
				Model:       gorm.Model{},
				Description: "",
			})
			if err := queryCustomer.Error; err != nil {
				tx.Rollback()
				return nil, err
			}
		}

		queryEmployee := tx.Model(&model.Employee{}).Create(model.Employee{
			Model:       gorm.Model{},
			Role:        constant.DefaultRole,
			Description: "",
		})
		if err := queryEmployee.Error; err != nil {
			tx.Rollback()
			return nil, err
		}

		if err := tx.Commit().Error; nil != err {
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

func (r *Repository) ListAll(req *pb.ListUserRequest) ([]*model.User, int64, error) {
	var count int64
	var list []*model.User

	sql := ""
	limit := int(req.GetLimit())
	offset := limit * int(req.GetPage()-1)

	if req.GetSearchField() != "" && req.GetSearchValue() != "" {
		searchFields := strings.Split(req.GetSearchField(), ",")
		searchValue := fmt.Sprintf("'%%%s%%'", req.GetSearchValue())

		for idx, field := range searchFields {
			if idx == 0 {
				sql += fmt.Sprintf("%s LIKE %s", field, searchValue)
				continue
			}
			sql += fmt.Sprintf(" OR %s LIKE %s", field, searchValue)
		}
	}

	listQuery := r.db.Model(&model.User{}).Select("*").Limit(limit).Offset(offset)
	countQuery := r.db.Model(&model.User{}).Select("id")

	if sql != "" {
		countQuery = countQuery.Where(sql)
		listQuery = listQuery.Where(sql)
	}

	if err := countQuery.Count(&count).Error; nil != err {
		return nil, 0, err
	}

	if err := listQuery.Find(&list).Limit(limit).Offset(offset).Error; nil != err {
		return nil, 0, err
	}

	return list, count, nil
}

func (r *Repository) DeleteOne(id int) error {
	query := r.db.Delete(&model.User{}, "id = ?", id)
	if err := query.Error; nil != err {
		return err
	}

	return nil
}
