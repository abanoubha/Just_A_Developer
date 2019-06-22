package main

import "fmt"
import "math/rand"

func main() {
	x := rand.Intn(33)
	y := rand.Intn(33)
	numberOfFalseGuesses := 0
	
	for x != y {
		fmt.Printf("x = %v and y = %v\n", x, y)
		y = rand.Intn(100)
		numberOfFalseGuesses++
	}
	fmt.Printf("finally x = y = %v\n", x)
	fmt.Printf("number of false guesses are %v", numberOfFalseGuesses)
}
