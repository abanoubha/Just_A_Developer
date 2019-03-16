<?php
chunk_split ( string $body [, int $chunklen = 76 [, string $end = "\r\n" ]] ) : string

// format $data using RFC 2045 semantics
$new_string = chunk_split(base64_encode($data));

// will return 12:34
$string = '1234';
substr(chunk_split($string, 2, ':'), 0, -1);

//explode() -> split a string by a string
explode ( string $delimiter , string $string [, int $limit = PHP_INT_MAX ] ) : array

$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2

$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user; // foo
echo $pass; // *

//split() -> split string into array by regular expression
//str_split() -> convert a string to an array

?>
