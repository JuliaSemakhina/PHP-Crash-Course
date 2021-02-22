<?php

// Create simple string
$string = "My name is";
echo $string;
echo '<br>';
$line = "$string Julia";
echo $line;
echo '<br>';
// String concatenation
echo 'Hello ' . 'World ' . 'and PHP' . '<br>'; 
// String functions
$string = "   Hello World   ";

echo strlen($string) . '<br>';
echo trim($string) . '<br>';
echo ltrim($string) . '<br>';
echo rtrim($string) . '<br>';
echo str_word_count($string) . '<br>';
echo strrev($string) . '<br>';
echo strtoupper($string) . '<br>';
echo strtolower($string) . '<br>';
echo ucfirst('hello') . '<br>';
echo lcfirst('HELLO') . '<br>';
echo ucwords('hello world and php') . '<br>';
echo strpos($string, 'world') . '<br>';
echo stripos($string, 'world') . '<br>';
echo substr($string, 8, 6) . '<br>';
echo str_replace('world', 'PHP', $string) . '<br>';
echo str_ireplace('world', 'PHP', $string) . '<br>';
// Multiline text and line breaks
$longText = "
Hello, my name is Julia
I am 36,
and I love my cat.
";
echo $longText. '<br>';
echo nl2br($longText). '<br>';
// Multiline text and reserve html tags
$longText2 = "
Hello, my name is <b>Julia</b>
I am <b>36</b>,
and I love my cat.
";
echo $longText2. '<br>';
echo nl2br($longText2). '<br>';
echo htmlentities($longText2). '<br>';
echo nl2br(htmlentities($longText2)). '<br>';

echo html_entity_decode('&lt;b&gt;Julia&lt;/b&gt;'). '<br>';
// https://www.php.net/manual/en/ref.strings.php