<?php
// Basic usage of if statements in PHP

// Example 1: Simple if statement
$number = 10;
if ($number > 5) {
    echo "$number is greater than 5\n";
}

// Example 2: if-else statement
$temperature = 20;
if ($temperature > 25) {
    echo "It's hot outside\n";
} else {
    echo "It's not hot outside\n";
}

// Example 3: if-elseif-else statement
$score = 85;
if ($score >= 90) {
    echo "Grade: A\n";
} elseif ($score >= 80) {
    echo "Grade: B\n";
} elseif ($score >= 70) {
    echo "Grade: C\n";
} elseif ($score >= 60) {
    echo "Grade: D\n";
} else {
    echo "Grade: F\n";
}

// Example 4: Nested if statements
$age = 22;
$hasPermission = true;
if ($age >= 18) {
    if ($hasPermission) {
        echo "You are allowed to enter.\n";
    } else {
        echo "You need permission to enter.\n";
    }
} else {
    echo "You are not allowed to enter.\n";
}

// Example 5: Using logical operators
$isMember = true;
$hasTicket = false;
if ($isMember || $hasTicket) {
    echo "You can attend the event.\n";
} else {
    echo "You cannot attend the event.\n";
}

// Example 6: Ternary operator as a shorthand for if-else
$age = 18;
$status = ($age >= 18) ? "adult" : "minor";
echo "You are an $status.\n";
