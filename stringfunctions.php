<?php
// Define a sample string
$str = "   Hello, World! This is a sample string.   ";

// String length
echo "String: $str<br>";
echo "Length of the string: " . strlen($str) . "<br>";

// Trim whitespace from the beginning and end of the string
$trimmed = trim($str);
echo "Trimmed string: $trimmed<br>";

// Convert string to lowercase and uppercase
echo "Lowercase: " . strtolower($str) . "<br>";
echo "Uppercase: " . strtoupper($str) . "<br>";

// Get part of a string (substring)
$start = 7;
$length = 5;
echo "Substring (start=$start, length=$length): " . substr($str, $start, $length) . "<br>";

// Replace part of a string
$search = "World";
$replace = "PHP";
echo "After replacing '$search' with '$replace': " . str_replace($search, $replace, $str) . "<br>";

// Find position of the first occurrence of a substring
$find = "is";
$pos = strpos($str, $find);
echo "Position of '$find' in the string: $pos<br>";

// Convert string to array
$array = str_split($str);
echo "String to array conversion: ";
print_r($array);
