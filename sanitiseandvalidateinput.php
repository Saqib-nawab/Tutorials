<?php
//sanitizing
// Example input data
$dirtyString = '<b>Hello, <script>alert("XSS");</script> World!</b>';
$dirtyNumber = '123abc456xyz';
$dirtyEmail = 'john.doe@example..com';

// Sanitize special characters from a string
$sanitizedString = filter_var($dirtyString, FILTER_SANITIZE_STRING);
echo "Original string: $dirtyString<br>";
echo "Sanitized string: $sanitizedString<br><br>";

// Filter and sanitize a number
$filteredNumber = filter_var($dirtyNumber, FILTER_SANITIZE_NUMBER_INT);
echo "Original number: $dirtyNumber<br>";
echo "Filtered number: $filteredNumber<br><br>";

// Validate and sanitize an email address
$sanitizedEmail = filter_var($dirtyEmail, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL)) {
    echo "Original email: $dirtyEmail<br>";
    echo "Sanitized and validated email: $sanitizedEmail<br>";
} else {
    echo "Invalid email format: $dirtyEmail<br>";
}



//filter validation
// Example input data
$dirtyEmail = 'john.doe@example.com';
$dirtyURL = 'http://example.com';
$dirtyIP = '192.168.1.1';
$dirtyInt = '123';

// Validate email
if (filter_var($dirtyEmail, FILTER_VALIDATE_EMAIL)) {
    echo "$dirtyEmail is a valid email.<br>";
} else {
    echo "$dirtyEmail is not a valid email.<br>";
}

// Validate URL
if (filter_var($dirtyURL, FILTER_VALIDATE_URL)) {
    echo "$dirtyURL is a valid URL.<br>";
} else {
    echo "$dirtyURL is not a valid URL.<br>";
}

// Validate IP address
if (filter_var($dirtyIP, FILTER_VALIDATE_IP)) {
    echo "$dirtyIP is a valid IP address.<br>";
} else {
    echo "$dirtyIP is not a valid IP address.<br>";
}

// Validate integer
if (filter_var($dirtyInt, FILTER_VALIDATE_INT)) {
    echo "$dirtyInt is a valid integer.<br>";
} else {
    echo "$dirtyInt is not a valid integer.<br>";
}
