<?php
// Demonstration of while loops in PHP

// Example 1: Simple while loop
echo "Example 1: Simple while loop\n";
$i = 0;
while ($i < 5) {
    echo "Iteration: $i\n";
    $i++;
}

// Example 2: while loop with an array
echo "\nExample 2: while loop with an array\n";
$colors = ["Red", "Green", "Blue", "Yellow"];
$i = 0;
while ($i < count($colors)) {
    echo "Color: $colors[$i]\n";
    $i++;
}

// Example 3: while loop with a condition
echo "\nExample 3: while loop with a condition\n";
$number = 10;
while ($number > 0) {
    echo "Number: $number\n";
    $number--;
}

// Example 4: while loop with a break statement
echo "\nExample 4: while loop with a break statement\n";
$i = 0;
while ($i < 10) {
    if ($i == 5) {
        break; // Exit the loop when $i equals 5
    }
    echo "Iteration: $i\n";
    $i++;
}

// Example 5: while loop with a continue statement
echo "\nExample 5: while loop with a continue statement\n";
$i = 0;
while ($i < 10) {
    $i++;
    if ($i % 2 == 0) {
        continue; // Skip the rest of the loop body for even numbers
    }
    echo "Odd iteration: $i\n";
}

// Example 6: while loop with user input
echo "\nExample 6: while loop with user input\n";
$userInput = "stop";
$input = "";
while ($input != $userInput) {
    // Simulating user input for demonstration purposes
    $input = ($input === "") ? "continue" : "stop";
    echo "User input: $input\n";
}
