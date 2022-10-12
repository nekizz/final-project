package employee

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

func (s Service) Create(ctx context.Context, r *pb.Employee) (*pb.Employee, error) {
	return &pb.Employee{}, nil
}

func (s Service) Update(ctx context.Context, r *pb.Employee) (*pb.Employee, error) {
	return &pb.Employee{}, nil
}

func (s Service) Get(ctx context.Context, r *pb.OneEmployeeRequest) (*pb.Employee, error) {

	return &pb.Employee{}, nil
}

func (s Service) List(ctx context.Context, r *pb.ListEmployeeRequest) (*pb.ListEmployeeResponse, error) {
	return &pb.ListEmployeeResponse{}, nil
}

func (s Service) Delete(ctx context.Context, r *pb.OneEmployeeRequest) (*types.Empty, error) {
	return &types.Empty{}, nil
}
