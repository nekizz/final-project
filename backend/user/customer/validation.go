package customer

import (
	pb "github.com/nekizz/final-project/backend/go-pbtype/user"
	"google.golang.org/grpc/codes"
	"google.golang.org/grpc/status"
)

func validateOne(e *pb.OneCustomerRequest) error {
	if e.GetId() == "" {
		return status.Error(codes.InvalidArgument, "UserID is required")
	}

	return nil
}
