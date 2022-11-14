package account

import (
	"context"
	"github.com/gogo/protobuf/types"
	pb "github.com/nekizz/final-project/backend/go-pbtype/account"
	"gorm.io/gorm"
)

type Service struct {
	db *gorm.DB
}

func NewService(db *gorm.DB) *Service {
	return &Service{db: db}
}

func (s Service) Create(ctx context.Context, r *pb.Account) (*pb.Account, error) {
	if err := validateOne(r); nil != err {
		return nil, err
	}

	_, err := NewRepository(s.db).RegistAccount(prepareDataToRequest(r))
	if err != nil {
		return &pb.Account{}, err
	}

	return &pb.Account{}, nil
}

func (s Service) Update(ctx context.Context, r *pb.Account) (*pb.Account, error) {
	return &pb.Account{}, nil
}

func (s Service) Get(ctx context.Context, r *pb.OneAccountRequest) (*pb.Account, error) {

	return &pb.Account{}, nil
}

func (s Service) List(ctx context.Context, r *pb.ListAcountRequest) (*pb.ListAccountResponse, error) {
	return &pb.ListAccountResponse{}, nil
}

func (s Service) Delete(ctx context.Context, r *pb.OneAccountRequest) (*types.Empty, error) {
	return &types.Empty{}, nil
}
