<?php
// PHP Math Functions Demonstration

// Absolute value
echo 'abs(-10): ' . abs(-10) . "\n";

// Arc cosine
echo 'acos(0.5): ' . acos(0.5) . "\n";

// Arc sine
echo 'asin(0.5): ' . asin(0.5) . "\n";

// Arc tangent
echo 'atan(1): ' . atan(1) . "\n";

// Inverse hyperbolic cosine
echo 'acosh(2): ' . acosh(2) . "\n";

// Inverse hyperbolic sine
echo 'asinh(1): ' . asinh(1) . "\n";

// Inverse hyperbolic tangent
echo 'atanh(0.5): ' . atanh(0.5) . "\n";

// Base conversion
echo 'base_convert("A37334", 16, 10): ' . base_convert("A37334", 16, 10) . "\n";

// Rounds fractions up
echo 'ceil(4.3): ' . ceil(4.3) . "\n";

// Cosine
echo 'cos(pi()/3): ' . cos(pi() / 3) . "\n";

// Hyperbolic cosine
echo 'cosh(1): ' . cosh(1) . "\n";

// Converts from radians to degrees
echo 'rad2deg(pi()/4): ' . rad2deg(pi() / 4) . "\n";

// Exponential expression
echo 'exp(2): ' . exp(2) . "\n";

// Exponential minus 1
echo 'expm1(1): ' . expm1(1) . "\n";

// Returns the floating point remainder (modulo)
echo 'fmod(5.7, 1.3): ' . fmod(5.7, 1.3) . "\n";

// Rounds fractions down
echo 'floor(4.7): ' . floor(4.7) . "\n";

// Get the integer part of a float
echo 'intval(4.7): ' . intval(4.7) . "\n";

// Natural logarithm
echo 'log(2.7183): ' . log(2.7183) . "\n";

// Base-10 logarithm
echo 'log10(100): ' . log10(100) . "\n";

// Base-2 logarithm
echo 'log1p(1): ' . log1p(1) . "\n";

// Finds highest value
echo 'max(1, 3, 5, 7): ' . max(1, 3, 5, 7) . "\n";

// Finds lowest value
echo 'min(1, 3, 5, 7): ' . min(1, 3, 5, 7) . "\n";

// Floating point power
echo 'pow(2, 3): ' . pow(2, 3) . "\n";

// Converts from degrees to radians
echo 'deg2rad(180): ' . deg2rad(180) . "\n";

// Random number
echo 'rand(): ' . rand() . "\n";

// Better random number
echo 'mt_rand(): ' . mt_rand() . "\n";

// Seed the better random number generator
mt_srand(123);
echo 'Seeded mt_rand(): ' . mt_rand() . "\n";

// Random float
echo 'lcg_value(): ' . lcg_value() . "\n";

// Round to nearest integer
echo 'round(4.5): ' . round(4.5) . "\n";

// Sine
echo 'sin(pi()/2): ' . sin(pi() / 2) . "\n";

// Hyperbolic sine
echo 'sinh(1): ' . sinh(1) . "\n";

// Square root
echo 'sqrt(16): ' . sqrt(16) . "\n";

// Tangent
echo 'tan(pi()/4): ' . tan(pi() / 4) . "\n";

// Hyperbolic tangent
echo 'tanh(1): ' . tanh(1) . "\n";

// Binary to Decimal
echo 'bindec("1010"): ' . bindec("1010") . "\n";

// Octal to Decimal
echo 'octdec("17"): ' . octdec("17") . "\n";

// Hexadecimal to Decimal
echo 'hexdec("A"): ' . hexdec("A") . "\n";

// Decimal to Binary
echo 'decbin(10): ' . decbin(10) . "\n";

// Decimal to Octal
echo 'decoct(10): ' . decoct(10) . "\n";

// Decimal to Hexadecimal
echo 'dechex(10): ' . dechex(10) . "\n";

// Hypotenuse of a right-angle triangle
echo 'hypot(3, 4): ' . hypot(3, 4) . "\n";

// Convert string to float
echo 'floatval("10.5"): ' . floatval("10.5") . "\n";

// Convert string to integer
echo 'intval("10"): ' . intval("10") . "\n";

// Check if a value is finite
echo 'is_finite(1.0): ' . is_finite(1.0) . "\n";

// Check if a value is infinite
echo 'is_infinite(log(0)): ' . is_infinite(log(0)) . "\n";

// Check if a value is not a number
echo 'is_nan(acos(1.5)): ' . is_nan(acos(1.5)) . "\n";
