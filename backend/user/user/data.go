package user

import (
	"fmt"
	pb "github.com/nekizz/final-project/backend/go-pbtype/user"
	"github.com/nekizz/final-project/backend/user/model"
	"gorm.io/gorm"
	"time"
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

func getModel(id uint, c *model.User) *model.User {
	c.ID = id
	return &model.User{
		Model: gorm.Model{
			ID:        id,
			CreatedAt: time.Time{},
			UpdatedAt: time.Time{},
			DeletedAt: gorm.DeletedAt{},
		},
		Avatar:   c.Avatar,
		Username: c.Username,
		Password: c.Password,
		Token:    c.Token,
		Name:     c.Name,
		Email:    c.Email,
		Address:  c.Address,
		Phone:    c.Phone,
		About:    c.About,
		Note:     c.Note,
	}
}
