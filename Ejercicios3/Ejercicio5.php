
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 5</title>
</head>
<body>
    <h1>EJERCICIO 5</h1>
<?php
$letters = "a,b,c,d,e,f";
$arrayLetters = explode(",", $letters);
rsort($arrayLetters);
$counter = 6;

foreach ($arrayLetters as $letra) {
    echo   $letra . "<br>";
}

?>
</body>
</html>