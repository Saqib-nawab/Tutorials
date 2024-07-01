<?php
// Demonstration of for loops in PHP

// Example 1: Simple for loop
echo "Example 1: Simple for loop\n";
for ($i = 0; $i < 5; $i++) {
    echo "Iteration: $i\n";
}

// Example 2: for loop with an array
echo "\nExample 2: for loop with an array\n";
$colors = ["Red", "Green", "Blue", "Yellow"];
for ($i = 0; $i < count($colors); $i++) {
    echo "Color: $colors[$i]\n";
}

// Example 3: Nested for loops
echo "\nExample 3: Nested for loops\n";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo "i = $i, j = $j\n";
    }
}

// Example 4: for loop with a decrementing counter
echo "\nExample 4: for loop with a decrementing counter\n";
for ($i = 5; $i > 0; $i--) {
    echo "Countdown: $i\n";
}

// Example 5: for loop with multiple variables
echo "\nExample 5: for loop with multiple variables\n";
for ($i = 0, $j = 10; $i <= 10; $i++, $j--) {
    echo "i = $i, j = $j\n";
}

// Example 6: for loop with a break statement
echo "\nExample 6: for loop with a break statement\n";
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        break; // Exit the loop when $i equals 5
    }
    echo "Iteration: $i\n";
}

// Example 7: for loop with a continue statement
echo "\nExample 7: for loop with a continue statement\n";
for ($i = 0; $i < 10; $i++) {
    if ($i % 2 == 0) {
        continue; // Skip the rest of the loop body for even numbers
    }
    echo "Odd iteration: $i\n";
}
