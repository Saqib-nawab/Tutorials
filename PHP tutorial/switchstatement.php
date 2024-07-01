<?php
// Demonstration of switch statement in PHP

$day = date('l'); // Get the current day of the week

switch ($day) {
    case 'Monday':
        echo "Today is Monday. Start of the work week!\n";
        break;
    case 'Tuesday':
        echo "Today is Tuesday. Second day of the work week.\n";
        break;
    case 'Wednesday':
        echo "Today is Wednesday. Midweek already!\n";
        break;
    case 'Thursday':
        echo "Today is Thursday. Just one more day to Friday.\n";
        break;
    case 'Friday':
        echo "Today is Friday. Last day of the work week!\n";
        break;
    case 'Saturday':
        echo "Today is Saturday. Enjoy the weekend!\n";
        break;
    case 'Sunday':
        echo "Today is Sunday. Relax and recharge.\n";
        break;
    default:
        echo "Invalid day.\n";
        break;
}

// Example 2: Using switch statement with a variable value
$grade = 'B';

switch ($grade) {
    case 'A':
        echo "Excellent! You scored an A.\n";
        break;
    case 'B':
        echo "Good job! You scored a B.\n";
        break;
    case 'C':
        echo "Well done! You scored a C.\n";
        break;
    case 'D':
        echo "You passed with a D.\n";
        break;
    case 'F':
        echo "Failed. Better luck next time.\n";
        break;
    default:
        echo "Invalid grade.\n";
        break;
}

// Example 3: Using switch statement with multiple cases for the same action
$fruit = 'apple';

switch ($fruit) {
    case 'apple':
    case 'pear':
    case 'banana':
        echo "The fruit is either an apple, pear, or banana.\n";
        break;
    case 'orange':
    case 'lemon':
        echo "The fruit is either an orange or lemon.\n";
        break;
    default:
        echo "Unknown fruit.\n";
        break;
}

// Example 4: Switch without break (fall-through)
$number = 2;

switch ($number) {
    case 1:
        echo "Number is 1\n";
    case 2:
        echo "Number is 2\n";
    case 3:
        echo "Number is 3\n";
        break;
    default:
        echo "Number is not 1, 2, or 3\n";
        break;
}
