package user

import (
	"fmt"
	pb "github.com/nekizz/final-project/backend/go-pbtype/user"
	"github.com/nekizz/final-project/backend/user/model"
	"gorm.io/gorm"
)

func prepareDataToResponse(p *model.User) *pb.User {
	return &pb.User{
		Id:      fmt.Sprintf("%d", p.ID),
		Name:    p.Name,
		Email:   p.Email,
		Address: p.Address,
		Phone:   p.Phone,
		Note:    p.Note,
	}
}

func prepareDataToRequest(p *pb.User) *model.User {
	return &model.User{
		Model:    gorm.Model{},
		Avatar:   "",
		Username: "",
		Password: "",
		Token:    "",
		Name:     p.Name,
		Email:    p.Email,
		Address:  p.Address,
		Phone:    p.Phone,
		About:    "",
		Note:     p.Note,
	}
}
