<?php

// Create array
$fruits = array(); //old fation
$fruit = ["banana", "apple", "orange"];

// Print the whole array
echo '<pre>';
var_dump($fruit);
echo '</pre>';

// Get element by index
echo '<br>';
echo $fruit[1].'<br>';

// Set element by index
$fruit[0] = "Peach";
echo $fruit[0].'<br>';

// Check if array has element at index 2
isset($fruit[2]); //true

// Append element
$fruit[] = 'Banana';
echo '<pre>';
var_dump($fruit);
echo '</pre>'; //to the end of array

// Print the length of the array
echo count($fruit).'<br>';

// Add element at the end of the array
array_push($fruit, '45');
echo '<pre>';
var_dump($fruit);
echo '</pre>';

// Remove element from the end of the array
array_pop($fruit);
echo '<pre>';
var_dump($fruit);
echo '</pre>';

// Add element at the beginning of the array
array_unshift($fruit, 'chocolate');
echo '<pre>';
var_dump($fruit);
echo '</pre>';

// Remove element from the beginning of the array
array_shift($fruit);
echo '<pre>';
var_dump($fruit);
echo '</pre>';

// Split the string into an array
$string = 'Banana, Apple, Kiwi, Lemon';
echo '<pre>';
var_dump(explode(",", $string));
echo '</pre>';

// Combine array elements into string

// Check if element exist in the array

// Search element index in the array

// Merge two arrays

// Sorting of array (Reverse order also)


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

// Get element by key

// Set element by key

// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys


// Two dimensional arrays