package main

import (
	"fmt"
	"strings"
	"unicode"
)

func main() {
	d := "sample data with some spaces included ."
	res := remove_all_spaces(d)
	fmt.Println(res)
}

func remove_all_spaces(str string) string {
    var b strings.Builder
    b.Grow(len(str))
    for _, ch := range str {
        if !unicode.IsSpace(ch) {
            b.WriteRune(ch)
        }
    }
    return b.String()
}
