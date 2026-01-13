<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>EJERCICIO 1</title></head>
<body>
<h1>EJERCICIO 1</h1>
<?php
$a = 4;
$b = 5;

echo "Los números son $a y $b<br>";
echo "La suma de $a + $b = " . ($a + $b) . "<br>";
echo "La resta de $a - $b = " . ($a - $b) . "<br>";
echo "La división de $a / $b = " . ($a / $b) . "<br>";

if ($a > $b) {
    echo "El número $a es mayor<br>";
} elseif ($a < $b) {
    echo "El número $b es mayor<br>";
} else {
    echo "Los números son iguales<br>";
}

if ($a > 1 && $b > 1) {
    $area = ($a * $b) / 2;
    echo "El área del triángulo es $area<br>";
}
?>
</body>
</html>
