package main

import (
	"fmt"
	"os"
	"github.com/tpwho/isPalindrome"
)

func main() {
	mysentence := "bob"
	result := isPalindrome.Check(mysentence)
	if result == true {
		fmt.Println("The sentence is a palindrome")
		os.Exit(0)
	}
	fmt.Println("The sentence is not a palindrome")
}
