package hotel

import (
	pb "github.com/nekizz/final-project/backend/go-pbtype/hotel"
	"google.golang.org/grpc/codes"
	"google.golang.org/grpc/status"
	"strings"
)

func validateOne(e *pb.OneHotelRequest) error {
	if e.GetId() == "" {
		return status.Error(codes.InvalidArgument, "UserID is required")
	}

	return nil
}

func validateUpdate(e *pb.Hotel) error {
	if e.GetId() == "" {
		return status.Error(codes.InvalidArgument, "Employee ID is required")
	}

	return validateCreate(e)
}

func validateCreate(e *pb.Hotel) error {
	if e.GetName() == "" {
		return status.Error(codes.InvalidArgument, "Name is required")
	}

	if e.GetAddress() == "" {
		return status.Error(codes.InvalidArgument, "Address is required")
	}

	return nil
}

func validateList(e *pb.ListHotelRequest) error {
	var field = strings.Split(e.GetSearchField(), ",")

	if e.GetPage() <= 0 {
		return status.Error(codes.InvalidArgument, "Invalid Page")
	}

	if e.GetLimit() <= 0 {
		return status.Error(codes.InvalidArgument, "Invalid Limit")
	}

	if e.GetSearchField() == "" && e.GetSearchValue() == "" {
		return nil
	}

	for i, _ := range field {
		var newField = strings.ToLower(strings.TrimSpace(field[i]))
		if newField != "name" && newField != "dob" && newField != "email" && newField != "gender" && newField != "role" && newField != "" {
			return status.Error(codes.InvalidArgument, "Invalid SearchFields")
		}
	}

	return nil
}
