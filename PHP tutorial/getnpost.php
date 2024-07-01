<!DOCTYPE html>
<html>

<head>
    <title>GET and POST</title>
</head>

<body>

    <h2>GET Method Form Demo</h2>
    <form method="GET" action="index.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <br><br>
        <input type="submit" value="Submit GET">
    </form>

    <h2>POST Method Form</h2>
    <form method="POST" action="index.php">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <br><br>
        <input type="submit" value="Submit POST">
    </form>

    <h2>Form Data</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['name'])) {
        $name = htmlspecialchars($_GET['name']);
        echo "GET Method: Name = " . $name . "<br>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
        $email = htmlspecialchars($_POST['email']);
        echo "POST Method: Email = " . $email . "<br>";
    }

    //or simply
    // $email = $_POST['email'];
    // echo "POST Method: Email = " . $email . "<br>";

    ?>
</body>

</html>