<?php
$num1 = 5;

echo $num1 . "\n";

$num2 = 1;

echo $num2 . "\n";

$num2 = $num1 + $num2;

echo "Result of num2 now: " . $num2 . "\n";

$num3 = 9;
$num4 = 9;

echo "Are they the same scalars? They should be..: " . ($num3 === $num4) . "\n";
echo "Are they truly the same? " . var_export($num3 === $num4, return: true) . "\n";

// So far, we have been working with decimal format of integers.

/*
Now we need to explore different representations of the same scalar type 'int'.
*/

