package used_service

import (
	"context"
	"github.com/gogo/protobuf/types"
	pb "github.com/nekizz/final-project/backend/go-pbtype/used-service"
	"gorm.io/gorm"
)

type Service struct {
	db *gorm.DB
}

func NewService(db *gorm.DB) *Service {
	return &Service{db: db}
}

func (s Service) Create(ctx context.Context, r *pb.Service) (*pb.Service, error) {
	return &pb.Service{}, nil
}

func (s Service) Update(ctx context.Context, r *pb.Service) (*pb.Service, error) {
	return &pb.Service{}, nil
}

func (s Service) Get(ctx context.Context, r *pb.OneServiceRequest) (*pb.Service, error) {

	return &pb.Service{}, nil
}

func (s Service) List(ctx context.Context, r *pb.ListServiceRequest) (*pb.ListSerivceResponse, error) {
	return &pb.ListSerivceResponse{}, nil
}

func (s Service) Delete(ctx context.Context, r *pb.OneServiceRequest) (*types.Empty, error) {
	return &types.Empty{}, nil
}
