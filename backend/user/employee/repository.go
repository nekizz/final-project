package employee

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

func (r *Repository) UpdateOne(id int, c *model.Employee) (*model.Employee, error) {
	query := r.db.Model(&model.Employee{}).Where("id = ?", id).UpdateColumns(model.Employee{})

	if err := query.Error; nil != err {
		return nil, err
	}

	return c, nil
}

func (r *Repository) FindCustomer(id int) (*model.Employee, error) {
	var employee model.Employee

	query := r.db.Model(&model.Employee{}).Where("id = ?", id).Find(&employee)
	if err := query.Error; nil != err {
		return nil, err
	}

	return &employee, nil
}

func (r *Repository) DeleteOne(id int) error {
	query := r.db.Delete(&model.Employee{}, "id = ?", id)
	if err := query.Error; nil != err {
		return err
	}

	return nil
}
