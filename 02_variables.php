<?php

// What is a variable

// Variable types
$name = "Julia";
$age = 24;


// Declare variables
$height = 1.85;
$salary = null;


// Print the variables. Explain what is concatenation
echo $age."<br>";
echo "</br>";
echo $age.$height."<br>";

// Print types of the variables
echo gettype($name)."<br>";
echo gettype($salary)."<br>";
echo gettype($age)."<br>";

// Print the whole variable
var_dump($name, $age, $height, $salary);

// Change the value of the variable
$name = false;

// Print type of the variable
echo "<br>";
echo gettype($name).'<br>';
// Variable checking functions
is_string($name);
echo '<br>';
is_string($salary);
echo '<br>';
is_string($age);
echo '<br>';
// Check if variable is defined
echo isset($name);
echo '<br>';
echo isset($address);
// Constants
echo '<br>';
define('PI', 3.14);
echo PI.'<br>';
// Using PHP built-in constants
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';