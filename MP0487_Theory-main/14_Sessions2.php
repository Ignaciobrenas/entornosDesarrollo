<!-- page2.php -->
<?php
session_start(); // Resume the session
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Store the user input in the session
    $_SESSION['name'] = $_GET['name'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>With Sessions</title>
</head>
<body>
    <?php
    if (isset($_SESSION['name'])) {
        $name = $_SESSION['name'];
        echo "<h1>Welcome back, $name!</h1>";
    } else {
        echo "<h1>No session data found!</h1>";
    }
    ?>
</body>
</html>
