<?php

/*
Let's explore what types we have, and the sytanx to use them.
*/

$foo = True; // case insensitive!

echo $foo . "\n"; // Output is 1, not True!

$bar = false; // again case insensitive

echo (int) $bar . "\n"; // should output the 0, not false in this case as well.
// Well it did not output any value, not even 0. Need to investigate.

// Actually we have been working with string representation of that boolean type.
// In this sense it is logicaly fine to think in terms of 1 and 0 as an empty string.

var_dump($foo); // load information about the object.