<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "businessdb"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// SQL statement for inserting data
$sql = "INSERT INTO users (user, password) VALUES ('Spongebob', 'pineapple1')";

// Check if the insertion was successful
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
