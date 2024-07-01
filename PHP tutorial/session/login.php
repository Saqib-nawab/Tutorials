<!-- login.html -->
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <form action="login.php" method="post">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
</body>

</html>

<?php
session_start();

// Hard-coded username and password for demonstration
$correct_username = "admin";
$correct_password = "password123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $correct_username && $password == $correct_password) {
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>