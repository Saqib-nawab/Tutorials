<!-- form.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Form Example</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);

        echo "<h2>Form Data Received</h2>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
    }
    ?>
</body>

</html>