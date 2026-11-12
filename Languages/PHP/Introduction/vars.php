<?php

/*
Let's try out what variables look like in PHP.
*/


/*
Defining the constants that should not change at all:

There are 2 ways:
    1. Using `const` following by conventional `UPPERCASE` `name`.
    2. By using `define()` function. Needs exploration.    
*/

const NAME = "David";
const AGE = 18;

/*
Can we save the `echo` into the variable? Turns out NO. It throws `Parse Error`.

$greet = echo "Hey"; // Invalid, produces `Parse Error`.
*/

echo "Hello " . NAME . "!\n";
echo "Your age is: " . AGE . "\n";


// Trying out the typical variable within the php.
$greet_user = "Welcome to the New World, User-1!";

echo $greet_user . "\n";