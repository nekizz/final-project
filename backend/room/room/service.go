package room

import (
	"context"
	"github.com/gogo/protobuf/types"
	pb "github.com/nekizz/final-project/backend/go-pbtype/room"
	"gorm.io/gorm"
)

type Service struct {
	db *gorm.DB
}

func NewService(db *gorm.DB) *Service {
	return &Service{db: db}
}

func (s Service) Create(ctx context.Context, r *pb.Room) (*pb.Room, error) {
	return &pb.Room{}, nil
}

func (s Service) Update(ctx context.Context, r *pb.Room) (*pb.Room, error) {
	return &pb.Room{}, nil
}

func (s Service) Get(ctx context.Context, r *pb.OneRoomRequest) (*pb.Room, error) {

	return &pb.Room{}, nil
}

func (s Service) List(ctx context.Context, r *pb.ListRoomRequest) (*pb.ListRoomResponse, error) {
	return &pb.ListRoomResponse{}, nil
}

func (s Service) Delete(ctx context.Context, r *pb.OneRoomRequest) (*types.Empty, error) {
	return &types.Empty{}, nil
}
