<?php
//Echoing a message"
// echo "i love pizza <br>";
// echo "its really good <br>";

//variables
// // Integer variable
// $age = 25; // Age in years

// // Float variable
// $height = 5.9; // Height in feet

// // String variable
// $name = "John Doe"; // Full name

// // Boolean variable
// $isStudent = true; // Is the person a student?

// // Array variable
// $colors = array("red", "green", "blue"); // Array of favorite colors

// // Associative array
// $person = array("first_name" => "John", "last_name" => "Doe", "age" => 25); // Person details

// // Null variable
// $middleName = null; // Middle name (not provided)

// // Object variable
// class Car
// {
//     public $make;
//     public $model;
//     public function __construct($make, $model)
//     {
//         $this->make = $make;
//         $this->model = $model;
//     }
// }
// $myCar = new Car("Toyota", "Corolla"); // Car object

// // Resource variable (example with a database connection)
// $server = "localhost";
// $username = "root";
// $password = "";
// $dbname = "test_db";
// $conn = new mysqli($server, $username, $password, $dbname); // Database connection

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Printing variables
// echo "Age: $age\n";
// echo "Height: $height\n";
// echo "Name: $name\n";
// echo "Is Student: " . ($isStudent ? "Yes" : "No") . "\n";
// echo "Favorite Colors: " . implode(", ", $colors) . "\n";
// echo "Person Details: " . $person['first_name'] . " " . $person['last_name'] . ", Age: " . $person['age'] . "\n";
// echo "Middle Name: " . ($middleName ?? "Not provided") . "\n";
// echo "Car: " . $myCar->make . " " . $myCar->model . "\n";

// // Closing the database connection
// $conn->close();




// Arithmetic operators
// $a = 10;
// $b = 5;

// // Addition
// $sum = $a + $b; // 15

// // Subtraction
// $difference = $a - $b; // 5

// // Multiplication
// $product = $a * $b; // 50

// // Division
// $quotient = $a / $b; // 2

// // Modulus
// $remainder = $a % $b; // 0

// echo "Sum: $sum\n";
// echo "Difference: $difference\n";
// echo "Product: $product\n";
// echo "Quotient: $quotient\n";
// echo "Remainder: $remainder\n";

// // Increment and decrement operators
// $x = 10;

// // Pre-increment
// echo "Pre-increment: " . ++$x . "\n"; // 11

// // Post-increment
// echo "Post-increment: " . $x++ . "\n"; // 11 (but $x becomes 12 after this statement)

// // Pre-decrement
// echo "Pre-decrement: " . --$x . "\n"; // 11

// // Post-decrement
// echo "Post-decrement: " . $x-- . "\n"; // 11 (but $x becomes 10 after this statement)

// // Operator precedence
// $result = 10 + 5 * 2; // Multiplication has higher precedence than addition, so 5*2 is evaluated first: 10 + 10 = 20
// echo "Result (10 + 5 * 2): $result\n";

// $result = (10 + 5) * 2; // Parentheses change the order of evaluation: 15 * 2 = 30
// echo "Result ((10 + 5) * 2): $result\n";

// $result = 10 + 5 - 2 * 3 / 2; // Multiplication and division have higher precedence than addition and subtraction: 10 + 5 - 6 / 2 = 10 + 5 - 3 = 12
// echo "Result (10 + 5 - 2 * 3 / 2): $result\n";

// $result = (10 + 5 - 2) * 3 / 2; // Parentheses change the order of evaluation: 13 * 3 / 2 = 19.5
// echo "Result ((10 + 5 - 2) * 3 / 2): $result\n";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Adding HTML code to a PHP file</p>
</body>

</html>