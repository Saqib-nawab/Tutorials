<?php
// Demonstration of associative arrays in PHP

// Creating an associative array
$person = array(
    "name" => "John Doe",
    "age" => 30,
    "city" => "New York"
);

// Accessing elements of the associative array
echo "Name: " . $person["name"] . "\n";
echo "Age: " . $person["age"] . "\n";
echo "City: " . $person["city"] . "\n";

// Modifying elements of the associative array
$person["age"] = 32;
echo "\nModified age: " . $person["age"] . "\n";

// Adding a new element to the associative array
$person["occupation"] = "Engineer";
echo "Added occupation: " . $person["occupation"] . "\n";

// Printing the entire associative array
echo "\nPrinting the entire associative array:\n";
print_r($person);

// Iterating through an associative array using foreach
echo "\nIterating through the associative array:\n";
foreach ($person as $key => $value) {
    echo "$key: $value\n";
}

// Checking if a key exists in the associative array
$keyToCheck = "city";
if (array_key_exists($keyToCheck, $person)) {
    echo "\n'$keyToCheck' exists in the associative array.\n";
} else {
    echo "\n'$keyToCheck' does not exist in the associative array.\n";
}

// Removing an element from the associative array
unset($person["age"]);
echo "\nAfter removing 'age' element:\n";
print_r($person);

// Checking the number of elements in the associative array
echo "\nNumber of elements in the associative array: " . count($person) . "\n";
