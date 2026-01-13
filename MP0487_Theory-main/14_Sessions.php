<!-- page1.php -->
<?php
session_start(); // Start the session
?>
<!DOCTYPE html>
<html>
<head>
    <title>With Sessions</title>
</head>
<body>
    <form action="14_Sessions2.php" method="GET">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
