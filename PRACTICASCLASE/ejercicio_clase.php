<body>
<?php
// -------------------------
// Input (declare variables)
// -------------------------

// Define two numeric variables
$var1 = 4;
$var2 = 5;

// -------------------------
// Logic (operations)
// -------------------------

// Addition
$result = $var1 + $var2;
// Subtraction
$resultSub = $var1 - $var2;
// Division
$resultDiv = $var1 / $var2;

// -------------------------
// Output (display results)
// -------------------------

// Concatenate strings and variables with the dot (.)
echo "The numbers are " . $var1 . " and " . $var2 . ".<br>";
echo "The sum of " . $var1 . " + " . $var2 . " = " . $result . ".<br>";
echo "The subtraction of " . $var1 . " - " . $var2 . " = " . $resultSub . ".<br>";
echo "The division of " . $var1 . " / " . $var2 . " = " . $resultDiv . ".<br>";

// -------------------------
// Conditional (if / else)
// -------------------------

// Check which number is greater or if they are equal
if ($var1 > $var2) {
    echo "The number " . $var1 . " is greater<br>";
} elseif ($var1 < $var2) {
    echo "The number " . $var2 . " is greater<br>";
} else {
    echo "The numbers are equal<br>";
}

// -------------------------
// Another conditional
// -------------------------

// If both numbers are greater than 1, calculate triangle area
if ($var1 > 1 && $var2 > 1) {
    // Formula for triangle area: (base * height) / 2
    echo "The triangle area is " . ($var1 * $var2) / 2 . ".<br>";
}
?>
</body>