<?php

/*
Let's understand a little bit of a syntax of floats in PHP.
*/

$a = 1.2; // Basic syntax.

// Another, a bit different format which is known as 'scientific notation':
$b = 1.2e3; // This means what? 1.2 * 10^3. This little 'e' stands for 'exponent'.
// $b = mantissa e <exponent_value>; 
// Note: the base there is 10 which is raised to some power.
// One more thing to note: if we use 'scientific notation' then the value produced would be of type 'float'.

echo $a . "\n";
echo $b . "\n";

/*
We also need to understand that 'floats' are discouraged when we need precision heavily.
Because float internally stores the value in binary-floating-point format.
*/
