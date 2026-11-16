<?php

/*
There are 4 ways of writing down the strings:

1. single quote
2. double quote
3. heredoc
4. nowdoc

*/

// Let's cover the `single quote` syntax:
$str1 = 'Hello World';
echo $str1;

// But single quoted can not understand some special symbols like: \r, \n, etc.
$str2 = 'Hey \n';
echo $str2;

// Overall `single quotes` treat everything as literal text, that is why they convey the meaning to the developer:
// Whenever we see single quoted strings, that means,
// we can be sure that it is gonna be a literal text without any special caveats and tricks.
// Therefore are a little bit faster as they skip scans for special characters that might appear within the `double quotes`.


// Double-quoted strings support the scanning for special characters, and also the variable names can be `expanded`.
// Expanded here means that double-quoted strings can read the variable's value,
// and not just print the $sign with the name of the variable.

$read_this = "This one is a double quoted string";

$message = "This is the message that has been read: $read_this";

echo $message;

// For other special characters: https://www.php.net/manual/en/language.types.string.php
