<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo $a + $b * $c;
echo '<br>';
echo $a % $b;
// Assignment with math operators
echo '<br>';
$a += $b;
echo $a;
// Increment operator

echo '<br>';
echo $a++;
echo '<br>';
echo ++$a;
// Decrement operator
echo '<br>';
echo $a--;
echo '<br>';
echo --$a;

// Number checking functions
is_float(1.25); //true
is_double(1.25); //true
is_int(5); //true
is_numeric("3.45"); //true

// Conversion
echo '<br>';

$strNumber = '12.34';
$number = (int)$strNumber;
var_dump($number);
// Number functions

// Formatting numbers

// https://www.php.net/manual/en/ref.math.php
