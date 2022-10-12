package booking

import (
	"context"
	"github.com/gogo/protobuf/types"
	pb "github.com/nekizz/final-project/backend/go-pbtype/booking"
	"gorm.io/gorm"
)

type Service struct {
	db *gorm.DB
}

func NewService(db *gorm.DB) *Service {
	return &Service{db: db}
}

func (s Service) Create(ctx context.Context, r *pb.Booking) (*pb.Booking, error) {
	return &pb.Booking{}, nil
}

func (s Service) Update(ctx context.Context, r *pb.Booking) (*pb.Booking, error) {
	return &pb.Booking{}, nil
}

func (s Service) Get(ctx context.Context, r *pb.OneBookingRequest) (*pb.Booking, error) {

	return &pb.Booking{}, nil
}

func (s Service) List(ctx context.Context, r *pb.ListBookingRequest) (*pb.ListBookingResponse, error) {
	return &pb.ListBookingResponse{}, nil
}

func (s Service) Delete(ctx context.Context, r *pb.OneBookingRequest) (*types.Empty, error) {
	return &types.Empty{}, nil
}
