package user

import (
	"context"
	"github.com/gogo/protobuf/types"
	pb "github.com/nekizz/final-project/backend/go-pbtype/user"
	"github.com/nekizz/final-project/backend/user/model"
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
	//if err := validateList(r); nil != err {
	//	return nil, err
	//}

	var list []*pb.User
	var fault error

	userChanel := make(chan []*model.User, 1)
	countChanel := make(chan int64, 1)
	errorChanel := make(chan error, 2)

	go func() {
		user, count, err := NewRepository(s.db).ListAll(r)
		if err != nil {
			errorChanel <- err
			userChanel <- nil
			countChanel <- 0
			return
		}
		errorChanel <- nil
		userChanel <- user
		countChanel <- count
	}()

	for i := 0; i < len(errorChanel); i++ {
		if err := <-errorChanel; err != nil {
			fault = err
		}
	}

	if nil != fault {
		return nil, fault
	}

	user := <-userChanel
	//count := <-countChanel

	for i := range user {
		companyData := prepareDataToResponse(user[i])
		list = append(list, companyData)
	}

	return &pb.ListUserResponse{
		Page:        0,
		Limit:       0,
		SearchField: "",
		SearchValue: "",
	}, nil
}

func (s Service) Delete(ctx context.Context, r *pb.OneUserRequest) (*types.Empty, error) {
	if err := validateOne(r); nil != err {
		return nil, err
	}

	id, _ := strconv.Atoi(r.GetId())
	err := NewRepository(s.db).DeleteOne(id)
	if nil != err {
		return nil, err
	}

	return &types.Empty{}, nil
}
