package main

import (
	"fmt"

	"github.com/otiai10/gosseract"
)

func main() {
	extracted := ocr("./test.jpg")
	fmt.Printf(extracted)
}

func ocr(imagePath string) string {
	client := gosseract.NewClient()
	client.SetLanguage("ara", "eng")
	defer client.Close()
	client.SetImage(imagePath)
	text, _ := client.Text()
	return text
}
