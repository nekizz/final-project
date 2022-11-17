package customer

import (
	"context"
	"github.com/gogo/protobuf/types"
	pb "github.com/nekizz/final-project/backend/go-pbtype/user"
	"gorm.io/gorm"
)

type Service struct {
	db *gorm.DB
}

func NewService(db *gorm.DB) *Service {
	return &Service{db: db}
}

func (s Service) Create(ctx context.Context, r *pb.Customer) (*pb.Customer, error) {
	return &pb.Customer{}, nil
}

func (s Service) Update(ctx context.Context, r *pb.Customer) (*pb.Customer, error) {
	return &pb.Customer{}, nil
}

func (s Service) Get(ctx context.Context, r *pb.OneCustomerRequest) (*pb.Customer, error) {

	return &pb.Customer{}, nil
}

func (s Service) List(ctx context.Context, r *pb.ListCustomerRequest) (*pb.ListcustomerResponse, error) {
	return &pb.ListcustomerResponse{}, nil
}

func (s Service) Delete(ctx context.Context, r *pb.OneCustomerRequest) (*types.Empty, error) {
	return &types.Empty{}, nil
}
