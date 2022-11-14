package account

import (
	"fmt"
	"github.com/nekizz/final-project/backend/account/model"
	pb "github.com/nekizz/final-project/backend/go-pbtype/account"
	"gorm.io/gorm"
)

func prepareDataToResponse(p *model.Account) *pb.Account {
	return &pb.Account{
		Id:       fmt.Sprintf("%d", p.ID),
		Username: p.Username,
		Password: p.Password,
		Token:    p.Token,
	}
}

func prepareDataToRequest(p *pb.Account) *model.Account {
	return &model.Account{
		Model:    gorm.Model{},
		Username: p.Username,
		Password: p.Password,
		Token:    p.Token,
	}
}
