<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Functions Demo</title>
</head>

<body>
    <h2>PHP Functions Demo</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Enter a number: <input type="number" name="number">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Function to check if a number is prime
    function isPrime($num)
    {
        if ($num <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    // Function to calculate factorial of a number
    function factorial($num)
    {
        if ($num === 0 || $num === 1) {
            return 1;
        }
        $result = 1;
        for ($i = 2; $i <= $num; $i++) {
            $result *= $i;
        }
        return $result;
    }

    // Function to display a message
    function displayMessage($msg)
    {
        echo "<p>$msg</p>";
    }

    // Process form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = isset($_POST['number']) ? $_POST['number'] : null;

        if ($number !== null) {
            // Check if number is prime
            if (isPrime($number)) {
                displayMessage("$number is a prime number.");
            } else {
                displayMessage("$number is not a prime number.");
            }

            // Calculate factorial of the number
            $factorial = factorial($number);
            displayMessage("Factorial of $number is: $factorial");
        } else {
            displayMessage("Please enter a number.");
        }
    }
    ?>
</body>

</html>