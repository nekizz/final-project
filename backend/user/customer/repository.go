package customer

import (
	"github.com/nekizz/final-project/backend/user/model"
	"gorm.io/gorm"
)

type Repository struct {
	db *gorm.DB
}

func NewRepository(db *gorm.DB) *Repository {
	return &Repository{db: db}
}

func (r *Repository) UpdateOne(id int, c *model.Customer) (*model.Customer, error) {
	query := r.db.Model(&model.Customer{}).Where("id = ?", id).UpdateColumns(model.Customer{})

	if err := query.Error; nil != err {
		return nil, err
	}

	return c, nil
}

func (r *Repository) FindCustomer(id int) (*model.Customer, error) {
	var customer model.Customer

	query := r.db.Model(&model.Customer{}).Where("id = ?", id).Find(&customer)
	if err := query.Error; nil != err {
		return nil, err
	}

	return &customer, nil
}

func (r *Repository) DeleteOne(id int) error {
	query := r.db.Delete(&model.Customer{}, "id = ?", id)
	if err := query.Error; nil != err {
		return err
	}

	return nil
}
