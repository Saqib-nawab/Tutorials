<?php
// Demonstration of arrays and array operations in PHP

// Create an indexed array
$colors = ["Red", "Green", "Blue", "Yellow"];

// Print the entire array
echo "Original array:\n";
print_r($colors);

// Add elements to the end of the array (push)
array_push($colors, "Purple", "Orange");
echo "\nAfter pushing two elements:\n";
print_r($colors);

// Remove the last element from the array (pop)
$lastColor = array_pop($colors);
echo "\nPopped element: $lastColor\n";
echo "Array after popping:\n";
print_r($colors);

// Accessing elements by index
echo "\nAccessing elements by index:\n";
echo "First element: " . $colors[0] . "\n";
echo "Second element: " . $colors[1] . "\n";

// Associative array
$person = [
    "name" => "John",
    "age" => 30,
    "city" => "New York"
];

// Print the associative array
echo "\nAssociative array:\n";
print_r($person);

// Accessing elements in an associative array
echo "Name: " . $person["name"] . "\n";
echo "Age: " . $person["age"] . "\n";

// Adding a new key-value pair to the associative array
$person["occupation"] = "Engineer";
echo "Updated associative array:\n";
print_r($person);

// Multidimensional array
$products = [
    ["name" => "Laptop", "price" => 1000],
    ["name" => "Phone", "price" => 500],
    ["name" => "Tablet", "price" => 300]
];

// Print the multidimensional array
echo "\nMultidimensional array:\n";
print_r($products);

// Iterating through an array using foreach
echo "\nIterating through colors array using foreach:\n";
foreach ($colors as $color) {
    echo "$color\n";
}

echo "\nIterating through products array using foreach:\n";
foreach ($products as $product) {
    echo "Product: " . $product["name"] . ", Price: $" . $product["price"] . "\n";
}

// Sorting arrays
echo "\nSorting the colors array:\n";
sort($colors); // Sorts in ascending order
print_r($colors);

echo "\nSorting the products array by price (ascending):\n";
usort($products, function ($a, $b) {
    return $a["price"] - $b["price"];
});
print_r($products);
