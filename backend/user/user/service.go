package user

import (
	"context"
	"github.com/gogo/protobuf/types"
	pb "github.com/nekizz/final-project/backend/go-pbtype/user"
	"gorm.io/gorm"
	"strconv"
)

type Service struct {
	db *gorm.DB
}

func NewService(db *gorm.DB) *Service {
	return &Service{db: db}
}

func (s Service) Create(ctx context.Context, r *pb.User) (*pb.User, error) {
	if err := validateCreate(r); nil != err {
		return nil, err
	}

	_, err := NewRepository(s.db).CreateOne(prepareDataToRequest(r))
	if err != nil {
		return &pb.User{}, err
	}

	return &pb.User{}, nil
}

func (s Service) Update(ctx context.Context, r *pb.User) (*pb.User, error) {
	if err := validateUpdate(r); err != nil {
		return nil, err
	}

	id, _ := strconv.Atoi(r.GetId())
	user, err := NewRepository(s.db).UpdateOne(id, prepareDataToRequest(r))
	if err != nil {
		return &pb.User{}, err
	}
	return prepareDataToResponse(user), nil
}

func (s Service) Get(ctx context.Context, r *pb.OneUserRequest) (*pb.User, error) {
	if err := validateOne(r); nil != err {
		return nil, err
	}

	id, _ := strconv.Atoi(r.GetId())
	user, err := NewRepository(s.db).FindOne(id)
	if nil != err {
		return nil, err
	}

	return prepareDataToResponse(user), nil
}

func (s Service) List(ctx context.Context, r *pb.ListUserRequest) (*pb.ListUserResponse, error) {
	return &pb.ListUserResponse{}, nil
}

func (s Service) Delete(ctx context.Context, r *pb.OneUserRequest) (*types.Empty, error) {
	return &types.Empty{}, nil
}
