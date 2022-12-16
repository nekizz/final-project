package hotel

import (
	"fmt"
	pb "github.com/nekizz/final-project/backend/go-pbtype/hotel"
	"github.com/nekizz/final-project/backend/hotel/model"
	"gorm.io/gorm"
	"strings"
)

type Repository struct {
	db *gorm.DB
}

func NewRepository(db *gorm.DB) *Repository {
	return &Repository{db: db}
}

func (r *Repository) CreatOne(e *model.Hotel) (*model.Hotel, error) {
	query := r.db.Model(&model.Hotel{}).Create(e)

	if err := query.Error; nil != err {
		return nil, err
	}

	return e, nil
}

func (r *Repository) UpdateOne(id int, c *model.Hotel) (*model.Hotel, error) {
	query := r.db.Model(&model.Hotel{}).Where("id = ?", id).UpdateColumns(getModel(uint(id), c))

	if err := query.Error; nil != err {
		return nil, err
	}

	return c, nil
}

func (r *Repository) FindOne(id int) (*model.Hotel, error) {
	var user model.Hotel

	query := r.db.Model(&model.Hotel{}).Where("id = ?", id).Find(&user)
	if err := query.Error; nil != err {
		return nil, err
	}

	return &user, nil
}

func (r *Repository) ListAll(req *pb.ListHotelRequest) ([]*model.Hotel, int64, error) {
	var count int64
	var list []*model.Hotel

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

	listQuery := r.db.Model(&model.Hotel{}).Select("*").Limit(limit).Offset(offset)
	countQuery := r.db.Model(&model.Hotel{}).Select("id")

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
	query := r.db.Delete(&model.Hotel{}, "id = ?", id)
	if err := query.Error; nil != err {
		return err
	}

	return nil
}
