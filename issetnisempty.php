<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Validation</title>
</head>

<body>
    <form action="process.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>



<?php
// Check if name is set and not empty
if (isset($_POST['name']) && !empty($_POST['name'])) {
    $name = $_POST['name'];
    echo "Name is set and not empty. Name: $name<br>";
} else {
    echo "Name is either not set or empty.<br>";
}

// Check if password is set and not empty
if (isset($_POST['password']) && !empty($_POST['password'])) {
    $password = $_POST['password'];
    echo "Password is set and not empty. Password: $password<br>";
} else {
    echo "Password is either not set or empty.<br>";
}
?>