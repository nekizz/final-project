package service

import (
	"fmt"
	pb "github.com/nekizz/final-project/backend/go-pbtype/service"
	"github.com/nekizz/final-project/backend/service/model"
	"gorm.io/gorm"
	"strings"
)

type Repository struct {
	db *gorm.DB
}

func NewRepository(db *gorm.DB) *Repository {
	return &Repository{db: db}
}

func (r *Repository) CreatOne(e *model.Service) (*model.Service, error) {
	query := r.db.Model(&model.Service{}).Create(e)

	if err := query.Error; nil != err {
		return nil, err
	}

	return e, nil
}

func (r *Repository) UpdateOne(id int, c *model.Service) (*model.Service, error) {
	query := r.db.Model(&model.Service{}).Where("id = ?", id).UpdateColumns(getModel(uint(id), c))

	if err := query.Error; nil != err {
		return nil, err
	}

	return c, nil
}

func (r *Repository) FindOne(id int) (*model.Service, error) {
	var service model.Service

	query := r.db.Model(&model.Service{}).Where("id = ?", id).Find(&service)
	if err := query.Error; nil != err {
		return nil, err
	}

	return &service, nil
}

func (r *Repository) ListAll(req *pb.ListServiceRequest) ([]*model.Service, int64, error) {
	var count int64
	var list []*model.Service

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

	listQuery := r.db.Model(&model.Service{}).Select("*").Limit(limit).Offset(offset)
	countQuery := r.db.Model(&model.Service{}).Select("id")

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
	query := r.db.Delete(&model.Service{}, "id = ?", id)
	if err := query.Error; nil != err {
		return err
	}

	return nil
}
