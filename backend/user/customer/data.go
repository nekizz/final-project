package customer

import (
	"fmt"
	pb "github.com/nekizz/final-project/backend/go-pbtype/user"
	"github.com/nekizz/final-project/backend/user/model"
	"gorm.io/gorm"
)

func prepareDataToResponse(p *model.Customer) *pb.Customer {
	return &pb.Customer{
		Id:          fmt.Sprintf("%d", p.ID),
		Role:        "",
		Description: p.Description,
	}
}

func prepareDataToRequest(p *pb.Customer) *model.Customer {
	return &model.Customer{
		Model:       gorm.Model{},
		User:        model.User{},
		Description: p.Description,
	}
}
