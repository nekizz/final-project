package hotel

import (
	"fmt"
	pb "github.com/nekizz/final-project/backend/go-pbtype/hotel"
	"github.com/nekizz/final-project/backend/hotel/model"
	"gorm.io/gorm"
	"time"
)

func prepareDataToResponse(p *model.Hotel) *pb.Hotel {
	return &pb.Hotel{
		Id:          fmt.Sprintf("%d", p.ID),
		Name:        p.Name,
		StarLevel:   int32(p.StarLevel),
		Address:     p.Address,
		Rate:        0,
		Rule:        p.Rule,
		Description: p.Description,
		Comment:     p.Comment,
	}
}

func prepareDataToRequest(p *pb.Hotel) *model.Hotel {
	return &model.Hotel{
		Model:       gorm.Model{},
		Name:        p.Name,
		StarLevel:   int(p.StarLevel),
		Address:     p.Address,
		Rate:        "",
		Rule:        p.Rule,
		Comment:     p.Comment,
		Description: p.Description,
	}
}

func getModel(id uint, c *model.Hotel) *model.Hotel {
	c.ID = id
	return &model.Hotel{
		Model: gorm.Model{
			ID:        id,
			CreatedAt: time.Time{},
			UpdatedAt: time.Time{},
			DeletedAt: gorm.DeletedAt{},
		},
		Name:        c.Name,
		StarLevel:   c.StarLevel,
		Address:     c.Address,
		Rate:        c.Rate,
		Rule:        c.Rule,
		Comment:     c.Comment,
		Description: c.Description,
	}
}
