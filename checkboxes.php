<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Select Interests</title>
</head>

<body>
    <form action="process.php" method="post">
        <label>Select your interests:</label><br>
        <input type="checkbox" id="music" name="interests[]" value="Music">
        <label for="music">Music</label><br>

        <input type="checkbox" id="sports" name="interests[]" value="Sports">
        <label for="sports">Sports</label><br>

        <input type="checkbox" id="books" name="interests[]" value="Books">
        <label for="books">Books</label><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if interests array is set and not empty
    if (isset($_POST['interests']) && !empty($_POST['interests'])) {
        $selected_interests = $_POST['interests'];
        echo "Selected interests: ";
        foreach ($selected_interests as $interest) {
            echo "$interest ";
        }
    } else {
        echo "Please select at least one interest.";
    }
}
?>