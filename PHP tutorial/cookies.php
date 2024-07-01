<?php
// Set cookies
setcookie("user", "John Doe", time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie("email", "john@example.com", time() + (86400 * 30), "/");

echo "Cookies have been set!<br>";

// Retrieve cookies
if (isset($_COOKIE["user"])) {
    echo "User is: " . $_COOKIE["user"] . "<br>";
} else {
    echo "User cookie is not set.<br>";
}

if (isset($_COOKIE["email"])) {
    echo "Email is: " . $_COOKIE["email"] . "<br>";
} else {
    echo "Email cookie is not set.<br>";
}

// Delete cookies
setcookie("user", "", time() - 3600, "/");
setcookie("email", "", time() - 3600, "/");

echo "Cookies have been deleted.";
