package user

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

func (s Service) Create(ctx context.Context, r *pb.User) (*pb.User, error) {
	return &pb.User{}, nil
}

func (s Service) Update(ctx context.Context, r *pb.User) (*pb.User, error) {
	return &pb.User{}, nil
}

func (s Service) Get(ctx context.Context, r *pb.OneUserRequest) (*pb.User, error) {

	return &pb.User{}, nil
}

func (s Service) List(ctx context.Context, r *pb.ListUserRequest) (*pb.ListUserResponse, error) {
	return &pb.ListUserResponse{}, nil
}

func (s Service) Delete(ctx context.Context, r *pb.OneUserRequest) (*types.Empty, error) {
	return &types.Empty{}, nil
}