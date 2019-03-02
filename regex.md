# Regular Expressions

## Basic Syntax

- `/.../`: Start and end regex delimiters
- `|`: Alternation
- `()`: Grouping

## Position Matching

- `^`: Start of string or start of line in multi-line mode
- `\A`: Start of string
- `$`: End of string or end of line in multi-line mode
- `\Z`: End of string
- `\b`: Word boundary
- `\B`: Not word boundary
- `\<`: Start of word
- `\>`: End of word

## Character Classes

- `\s`: Whitespace
- `\S`: Not whitespace
- `\w`: Word
- `\W`: Not word
- `\d`: Digit
- `\D`: Not digit
- `\x`: Hexade­cimal digit
- `\O`: Octal digit

## Special Characters

- `\n`: Newline
- `\r`: Carriage return
- `\t`: Tab
- `\v`: Vertical tab
- `\f`: Form feed
- `\xxx`: Octal character xxx
- `\xhh`: Hex character hh

## Groups and Ranges

- `.`: Any character except newline (\n)
- `(a|b)`: a or b
- `(…)`: Group
- `(?:…)`: Passive (non-c­apt­uring) group
- `[abc]`: a, b or c
- `[^abc]`: Not a, b or c
- `[a-z]`: Letters from a to z
- `[A-Z]`: Uppercase letters from A to Z
- `[0-9]`: Digits from 0 to 9

> Note: Ranges are inclusive.

## Quantifiers

- `*`: 0 or more
- `+`: 1 or more
- `?`: 0 or 1
- `{3`: Exactly 3
- `{3,}`: 3 or more
- `{3,5}`: 3, 4 or 5

> Note: Quantifiers are greedy - they match as many times as possible. Add a ? after the quantifier to make it ungreedy.

## Escape Sequences

- `\`:Escape following character. Used to escape any of the following metacharacters: {}[]()^$.|*+?\.
- `\Q`: Begin literal sequence
- `\E`: End literal sequence

## String Replacement

- `$1`: 1st group
- `$2`: 2nd group
- `$n`: nth group
- `$``: Before matched string
- `$'`: After matched string
- `$+`: Last matched string
- `$&`: Entire matched string

> Note: Some regex implem­ent­ations use \ instead of $.

## Assertions

- `?=`: Lookahead assertion
- `?!`: Negative lookahead
- `?<=`: Lookbehind assertion
- ``?!=, ?<!``: Negative lookbehind
- `?>`: Once-only subexp­ression
- `?()`: Condition if-then
- `?()|`: Condition if-then-else
- `?#`: Comment

## POSIX

- `[:upper:]`: Uppercase letters
- `[:lower:]`: Lowercase letters
- `[:alpha:]`: All letters
- `[:alnum:]`: Digits and letters
- `[:digit:]`: Digits
- `[:xdigit:]`: Hexade­cimal digits
- `[:punct:]`: Punctu­ation
- `[:blank:]`: Space and tab
- `[:space:]`: Blank characters
- `[:cntrl:]`: Control characters
- `[:graph:]`: Printed characters
- `[:print:]`: Printed characters and spaces
- `[:word:]`: Digits, letters and underscore

## Pattern Modifiers

- `g`: Global match
- `i`: Case-i­nse­nsitive
- `m`: Multi-line mode. Causes ^ and $ to also match the start/end of lines.
- `s`: Single-line mode. Causes . to match all, including line breaks.
- `x`: Allow comments and whitespace in pattern
- `e`: Evaluate replac­ement
- `U`: Ungreedy mode

## Using RegEx in JavaScript
`.` (period) Matches any single character. For example the regular expression c.t would match the strings cat, cut, c t, but not cart or clot (because there is more than one character between the c and the t)
```javascript
var text = "Its raining cats and dogs";
var pattern = /c.t/;
var match = text.match(pattern);
console.log(match.index);       // >> 12
```
`^` (caret or "circumflex") Matches the beginning of a line. For example, the regular expression ^Once will match the beginning of "Once upon a time" but would not match "I only saw her cry once..."
```javascript
var text = "wake up its a beautiful morning!";
var pattern = /^wake/;
var match = text.match(pattern);
console.log(match.index);       // >> 0 

var text = "I'm wide awake";
var pattern = /^wake/;
var match = text.match(pattern);
console.log(match);             // >> null
```
$ (dollar) Matches the end of a line. The pattern: away$ would match the end of the string "I need to get away" but not the string "Up Up and away!" (because the away pattern is not at the end of the text/string/line)
```javascript
var text = "this is the end";
var pattern = /end$/;
var match = text.match(pattern);
console.log(match.index);       // >> 12

var text = "is this the end?";
var pattern = /end$/;
var match = text.match(pattern);
console.log(match);             // >> null
```
`*` (asterisk) Matches zero or more occurences of the character immediately preceding. ma* means match any occurance of the characters ma followed by any other character so it will find matt or marmite but ignore mom because it does not contain ma.
```javascript
var text = "The matrix is all around us...";
var pattern = /ma*/;
var match = text.match(pattern);
console.log(match.index); // >> 4
```
\ (backslash) The quoting/escaping character, use it to treat the next character as an ordinary character. For example: $ is used to match the dollar sign ($) rather than the end of a line. Similarly, the expression . is used to match the period character rather than any single character.
```javascript
var text = "My Raspberry Pi Cost $45!";
var pattern = /\$/;
var match = text.match(pattern);
console.log(match.index);       // >> 21

var text = "Is this the end...?"
var pattern = /\./g;
var match, matches = [];
while ( (match = pattern.exec(text)) ) {
    matches.push(match.index);
}
console.log(matches); // >> [ 15, 16, 17 ]
```
`[ ]` (square brackets) Matches any one of the characters between the brackets For example, the regular expression r[aou]t matches rat, rot, and rut, but not ret.
```javascript
var text = "The caged rat felt stuck in a rut.";
var pattern = /r[aou]t/g;
var match, matches = [];
while ( (match = pattern.exec(text)) ) {
    matches.push(match.index);
}
console.log(matches); // >> [ 10, 30 ]
```
An example of a range of characters we want to look for is: `[0-9]` this means means find any digit (its much easier than writing [0123456789])
```javascript
var text = "The 49ers are an American football team based in San Francisco, California";
var pattern = /[0-9]/;
var match = text.match(pattern);
console.log(match.index);       // >> 4

var text = "The 49ers are an American football team based in San Francisco, California";
var pattern = /[0123456789]/;
var match = text.match(pattern);
console.log(match.index);       // >> 4
```
We can find all the numbers recursively in a block of text:
```javascript
var text = "2486 runners started the race but only 1865 finished!";
var pattern = /[0-9]/g;
var match, matches = [];
while ( (match = pattern.exec(text)) ) {
    matches.push(match.index);
}
console.log(matches); // >> [ 0, 1, 2, 3, 39, 40, 41, 42 ]
```
`|` (verticle bar or "pipe") Allows us to serach for two conditions together. For example (him|her) matches the line "it belongs to him" and matches the line "it belongs to her" but does not match the line "it belongs to them."
```javascript
var text = "2486 runners started the race but only 1865 finished!";
var pattern = /[0-9]/g;
var match, matches = [];
while ( (match = pattern.exec(text)) ) {
    matches.push(match.index);
}
console.log(matches); // >> [ 0, 1, 2, 3, 39, 40, 41, 42 ]
```
### Flags Tell us How to Search
Flags are placed at the end of the pattern (after the last forward slash) and tell the regular expression parser how we want to search.
- g : "global search" or "find all occurences"
- i : "case insensitive" so find both CAT and cat
- m : "multiline" will match your pattern over multiple lines

### Special Characters
\d Matches a digit character in the basic Latin alphabet. Equivalent to [0-9]
\D Matches any character that is not a digit in the basic Latin alphabet. Equivalent to [^0-9]

### Help Improve Docs
This repo is a documentation. You can help me improve it by reporting [issues](https://github.com/DevAbanoub/programming_route/issues).
