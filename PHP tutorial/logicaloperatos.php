<?php
// Demonstration of logical operators in PHP

// AND (&&) operator
$a = true;
$b = true;
if ($a && $b) {
    echo "Both \$a and \$b are true\n";
} else {
    echo "Either \$a or \$b is false\n";
}

// OR (||) operator
$a = true;
$b = false;
if ($a || $b) {
    echo "Either \$a or \$b is true\n";
} else {
    echo "Both \$a and \$b are false\n";
}

// NOT (!) operator
$a = false;
if (!$a) {
    echo "\$a is false\n";
} else {
    echo "\$a is true\n";
}

// XOR (^) operator
$a = true;
$b = false;
if ($a ^ $b) {
    echo "Either \$a or \$b is true, but not both\n";
} else {
    echo "Both \$a and \$b are true or both are false\n";
}

// Combining logical operators
$a = true;
$b = false;
$c = true;
if ($a && $b || $c) {
    echo "(\$a && \$b) || \$c is true\n";
} else {
    echo "(\$a && \$b) || \$c is false\n";
}

// Logical AND with bitwise AND (&)
$x = 6;  // 110 in binary
$y = 3;  // 011 in binary
if (($x & $y) == $y) {
    echo "\$y is within \$x when using bitwise AND\n";
} else {
    echo "\$y is not within \$x when using bitwise AND\n";
}

// Logical OR with bitwise OR (|)
$x = 6;  // 110 in binary
$y = 3;  // 011 in binary
if (($x | $y) == 7) {
    echo "\$x | \$y is equal to 7 when using bitwise OR\n";
} else {
    echo "\$x | \$y is not equal to 7 when using bitwise OR\n";
}

// Logical XOR with bitwise XOR (^)
$x = 6;  // 110 in binary
$y = 3;  // 011 in binary
if (($x ^ $y) == 5) {
    echo "\$x ^ \$y is equal to 5 when using bitwise XOR\n";
} else {
    echo "\$x ^ \$y is not equal to 5 when using bitwise XOR\n";
}
