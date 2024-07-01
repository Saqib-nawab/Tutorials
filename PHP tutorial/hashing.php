<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Here you would store the $username and $hashed_password in your database.
    // For demonstration, we're just outputting them.
    echo "Username: " . htmlspecialchars($username) . "<br>";
    echo "Hashed Password: " . htmlspecialchars($hashed_password) . "<br>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Register">
    </form>
</body>

</html>