package bill

import (
	"context"
	"github.com/gogo/protobuf/types"
	pb "github.com/nekizz/final-project/backend/go-pbtype/bill"
	"gorm.io/gorm"
)

type Service struct {
	db *gorm.DB
}

func NewService(db *gorm.DB) *Service {
	return &Service{db: db}
}

func (s Service) Create(ctx context.Context, r *pb.Bill) (*pb.Bill, error) {
	return &pb.Bill{}, nil
}

func (s Service) Update(ctx context.Context, r *pb.Bill) (*pb.Bill, error) {
	return &pb.Bill{}, nil
}

func (s Service) Get(ctx context.Context, r *pb.OneBillRequest) (*pb.Bill, error) {

	return &pb.Bill{}, nil
}

func (s Service) List(ctx context.Context, r *pb.OneBillRequest) (*pb.ListBillResponse, error) {
	return &pb.ListBillResponse{}, nil
}

func (s Service) Delete(ctx context.Context, r *pb.OneBillRequest) (*types.Empty, error) {
	return &types.Empty{}, nil
}
