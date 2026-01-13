<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>EJERCICIO 3</title></head>
<body>
<h1>EJERCICIO 3</h1>
<?php
$x = 12;
$y = 15;

echo "<br> Números pares hasta $x:<br>";
for ($i = 0; $i <= $x; $i += 2) {
    echo "$i ";
} 

echo "<br>Progresion numerica desde $y:<br>";
while ($y >= 0) {
    echo "$y ";
    $y--;
}

echo "<br>Progresion numerica desde la x a y<br>";
do {
    echo "$x ";
    $x++;
} while ($x <= $y) 
?>
</body>
</html>
