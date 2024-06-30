<?php
// Arithmetic operators
$a = 10;
$b = 5;

// Addition
$sum = $a + $b; // 15

// Subtraction
$difference = $a - $b; // 5

// Multiplication
$product = $a * $b; // 50

// Division
$quotient = $a / $b; // 2

// Modulus
$remainder = $a % $b; // 0

echo "Sum: $sum\n";
echo "Difference: $difference\n";
echo "Product: $product\n";
echo "Quotient: $quotient\n";
echo "Remainder: $remainder\n";

// Increment and decrement operators
$x = 10;

// Pre-increment
echo "Pre-increment: " . ++$x . "\n"; // 11

// Post-increment
echo "Post-increment: " . $x++ . "\n"; // 11 (but $x becomes 12 after this statement)

// Pre-decrement
echo "Pre-decrement: " . --$x . "\n"; // 11

// Post-decrement
echo "Post-decrement: " . $x-- . "\n"; // 11 (but $x becomes 10 after this statement)

// Operator precedence
$result = 10 + 5 * 2; // Multiplication has higher precedence than addition, so 5*2 is evaluated first: 10 + 10 = 20
echo "Result (10 + 5 * 2): $result\n";

$result = (10 + 5) * 2; // Parentheses change the order of evaluation: 15 * 2 = 30
echo "Result ((10 + 5) * 2): $result\n";

$result = 10 + 5 - 2 * 3 / 2; // Multiplication and division have higher precedence than addition and subtraction: 10 + 5 - 6 / 2 = 10 + 5 - 3 = 12
echo "Result (10 + 5 - 2 * 3 / 2): $result\n";

$result = (10 + 5 - 2) * 3 / 2; // Parentheses change the order of evaluation: 13 * 3 / 2 = 19.5
echo "Result ((10 + 5 - 2) * 3 / 2): $result\n";
