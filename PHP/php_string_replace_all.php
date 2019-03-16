//preg_replace() -> use regular expression to replace in a string
//str_replace() -> replace all in a string

<?php
$body = str_replace("%body%", "black", "<body text='%body%'>");
//result: <body text='black'>

$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyConsonants = str_replace($vowels, "", "Hello World of PHP");
//result: Hll Wrld f PHP

$phrase = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy = array("pizza", "beer", "ice cream");

$newPhrase = str_replace($healthy, $yummy, $phrase);
//gives: You should east pizza, beer, and ice cream every day.

$str = str_replace("ll", "", "good golly miss molly!", $count);
echo $count;
//gives: 2
// 2 is the number of occurrences of the text part in the string

// Order of replacement
$str     = "Line 1\nLine 2\rLine 3\r\nLine 4\n";
$order   = array("\r\n", "\n", "\r");
$replace = '<br />';

// Processes \r\n's first so they aren't converted twice.
$newstr = str_replace($order, $replace, $str);

// Outputs F because A is replaced with B, then B is replaced with C, and so on...
// Finally E is replaced with F, because of left to right replacements.
$search  = array('A', 'B', 'C', 'D', 'E');
$replace = array('B', 'C', 'D', 'E', 'F');
$subject = 'A';
echo str_replace($search, $replace, $subject);

// Outputs: apearpearle pear
// For the same reason mentioned above
$letters = array('a', 'p');
$fruit   = array('apple', 'pear');
$text    = 'a p';
$output  = str_replace($letters, $fruit, $text);
echo $output;

//A faster way to replace the strings in multidimensional array is to json_encode() it, do the str_replace() and then json_decode() it, like this:

function str_replace_json($search, $replace, $subject){ 
 return json_decode(str_replace($search, $replace,  json_encode($subject))); 
}

//This method is almost 3x faster (in 10000 runs.) than using recursive calling and looping method, and 10x simpler in coding. Compared to:

function str_replace_deep($search, $replace, $subject)
{
    if (is_array($subject))
    {
        foreach($subject as &$oneSubject)
            $oneSubject = str_replace_deep($search, $replace, $oneSubject);
        unset($oneSubject);
        return $subject;
    } else {
        return str_replace($search, $replace, $subject);
    }
}

//Feel free to optimize this using the while/for or anything else, but this is a bit of code that allows you to replace strings found in an associative array. 

$replace = array(
'dog' => 'cat',
'apple' => 'orange'
'chevy' => 'ford'
);

$string = 'I like to eat an apple with my dog in my chevy';

echo str_replace_assoc($replace,$string);

// Echo: I like to eat an orange with my cat in my ford

//Here is the function:

function strReplaceAssoc(array $replace, $subject) {
 return str_replace(array_keys($replace), array_values($replace), $subject);
}

//replace each character with another character
$arr = array("1" => "A","2" => "B","3" => "C","B" => "D");
$word = "ZBB2";
echo strtr($word,$arr);

?>
