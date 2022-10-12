package booked_room

import (
	"context"
	"github.com/gogo/protobuf/types"
	pb "github.com/nekizz/final-project/backend/go-pbtype/booked-room"
	"gorm.io/gorm"
)

type Service struct {
	db *gorm.DB
}

func NewService(db *gorm.DB) *Service {
	return &Service{db: db}
}

func (s Service) Create(ctx context.Context, r *pb.BookedRoom) (*pb.BookedRoom, error) {
	return &pb.BookedRoom{}, nil
}

func (s Service) Update(ctx context.Context, r *pb.BookedRoom) (*pb.BookedRoom, error) {
	return &pb.BookedRoom{}, nil
}

func (s Service) Get(ctx context.Context, r *pb.OneBookedRoomRequest) (*pb.BookedRoom, error) {

	return &pb.BookedRoom{}, nil
}

func (s Service) List(ctx context.Context, r *pb.ListBookedRoomRequest) (*pb.ListBookedRoomResponse, error) {
	return &pb.ListBookedRoomResponse{}, nil
}

func (s Service) Delete(ctx context.Context, r *pb.OneBookedRoomRequest) (*types.Empty, error) {
	return &types.Empty{}, nil
}
