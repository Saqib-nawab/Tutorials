<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Select Payment Method</title>
</head>

<body>
    <form action="process.php" method="post">
        <label>Select Payment Method:</label><br>
        <input type="radio" id="visa" name="payment_method" value="Visa">
        <label for="visa">Visa</label><br>

        <input type="radio" id="mastercard" name="payment_method" value="Mastercard">
        <label for="mastercard">Mastercard</label><br>

        <input type="radio" id="hbl" name="payment_method" value="HBL">
        <label for="hbl">HBL</label><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the payment method is set and not empty
    if (isset($_POST['payment_method']) && !empty($_POST['payment_method'])) {
        $payment_method = $_POST['payment_method'];
        echo "Selected payment method: $payment_method";
    } else {
        echo "Please select a payment method.";
    }
}
?>