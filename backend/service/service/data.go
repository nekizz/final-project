package service

import (
	"fmt"
	pb "github.com/nekizz/final-project/backend/go-pbtype/service"
	"github.com/nekizz/final-project/backend/service/model"
	"gorm.io/gorm"
	"time"
)

func prepareDataToResponse(p *model.Service) *pb.Service {
	return &pb.Service{
		Id:    fmt.Sprintf("%d", p.ID),
		Name:  p.Name,
		Unity: p.Unity,
		Price: float32(p.Price),
	}
}

func prepareDataToRequest(p *pb.Service) *model.Service {
	return &model.Service{
		Model: gorm.Model{},
		Name:  p.Name,
		Unity: p.Unity,
		Price: float64(p.Price),
	}
}

func getModel(id uint, c *model.Service) *model.Service {
	c.ID = id
	return &model.Service{
		Model: gorm.Model{
			ID:        id,
			CreatedAt: time.Time{},
			UpdatedAt: time.Time{},
			DeletedAt: gorm.DeletedAt{},
		},
		Name:  c.Name,
		Unity: c.Unity,
		Price: c.Price,
	}
}
