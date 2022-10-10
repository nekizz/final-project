package account

import (
	"context"
	pb "github.com/n3kizz/final-project/backend/pbtype"
	"gorm.io/gorm"
)

type Service struct {
	db *gorm.DB
}

func NewService(db *gorm.DB) *Service {
	return &Service{db: db}
}

func (s Service) Create(ctx context.Context, r *pb.Account) (*pb.Company, error) {
	if err := validateCreate(r); nil != err {
		return nil, err
	}

	company, err := NewRepository(s.db).CreatOne(prepareDataToRequest(r))

	if nil != err {
		return nil, err
	}

	return prepareDataToResponse(company), nil
}
