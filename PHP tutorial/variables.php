<?php
// variables
// Integer variable
$age = 25; // Age in years

// Float variable
$height = 5.9; // Height in feet

// String variable
$name = "John Doe"; // Full name

// Boolean variable
$isStudent = true; // Is the person a student?

// Array variable
$colors = array("red", "green", "blue"); // Array of favorite colors

// Associative array
$person = array("first_name" => "John", "last_name" => "Doe", "age" => 25); // Person details

// Null variable
$middleName = null; // Middle name (not provided)

// Object variable
class Car
{
    public $make;
    public $model;
    public function __construct($make, $model)
    {
        $this->make = $make;
        $this->model = $model;
    }
}
$myCar = new Car("Toyota", "Corolla"); // Car object

// Resource variable (example with a database connection)
$server = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";
$conn = new mysqli($server, $username, $password, $dbname); // Database connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Printing variables
echo "Age: $age\n";
echo "Height: $height\n";
echo "Name: $name\n";
echo "Is Student: " . ($isStudent ? "Yes" : "No") . "\n";
echo "Favorite Colors: " . implode(", ", $colors) . "\n";
echo "Person Details: " . $person['first_name'] . " " . $person['last_name'] . ", Age: " . $person['age'] . "\n";
echo "Middle Name: " . ($middleName ?? "Not provided") . "\n";
echo "Car: " . $myCar->make . " " . $myCar->model . "\n";

// Closing the database connection
$conn->close();
