package main

import (
	"fmt"
	"net/smtp"
)

func main() {
	from := "drminhvipoi2@gmail.com"
	password := "minhminh123"

	toEmailAddress := "drminhvipoi2000@gmail.com"
	to := []string{toEmailAddress}

	host := "smtp.gmail.com"
	port := "587"
	address := host + ":" + port

	subject := "Subject: This is the subject of the mail\n"
	body := "This is the body of the mail"
	message := []byte(subject + body)

	auth := smtp.PlainAuth("", from, password, host)

	err := smtp.SendMail(address, auth, from, to, message)
	if err != nil {
		fmt.Println(err)
	}
}
