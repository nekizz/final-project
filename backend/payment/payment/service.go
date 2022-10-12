package payment

import (
	"context"
	"github.com/gogo/protobuf/types"
	pb "github.com/nekizz/final-project/backend/go-pbtype/payment"
	"gorm.io/gorm"
)

type Service struct {
	db *gorm.DB
}

func NewService(db *gorm.DB) *Service {
	return &Service{db: db}
}

func (s Service) Create(ctx context.Context, r *pb.Payment) (*pb.Payment, error) {
	return &pb.Payment{}, nil
}

func (s Service) Update(ctx context.Context, r *pb.Payment) (*pb.Payment, error) {
	return &pb.Payment{}, nil
}

func (s Service) Get(ctx context.Context, r *pb.OnePaymentRequest) (*pb.Payment, error) {

	return &pb.Payment{}, nil
}

func (s Service) List(ctx context.Context, r *pb.ListPaymentRequest) (*pb.ListPaymentResponse, error) {
	return &pb.ListPaymentResponse{}, nil
}

func (s Service) Delete(ctx context.Context, r *pb.OnePaymentRequest) (*types.Empty, error) {
	return &types.Empty{}, nil
}
