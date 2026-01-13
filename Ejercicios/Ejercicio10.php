<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>EJERCICIO 10</title></head>
<body>
<h1>EJERCICIO 10</h1>
<?php

$valor = rand(1, 9999999);
$impuesto = 0;

if ($valor < 5000) {
    $impuesto = 0;
} elseif ($valor <= 25000) {
    $impuesto = 100 + ($valor - 5000) * 0.08;
} elseif ($valor <= 55000) {
    $impuesto = 1700 + ($valor - 25000) * 0.10;
} elseif ($valor <= 200000) {
    $impuesto = 4700 + ($valor - 55000) * 0.12;
} elseif ($valor <= 1000000) {
    $impuesto = 22100 + ($valor - 200000) * 0.15;
} else {
    $impuesto = 142100 + ($valor - 1000000) * 0.17;
}

echo "Value of the gift: $valor<br>";
if ($impuesto == 0) {
    echo "No tax!";
} else {
    echo "Tax: $impuesto";
}
?>

</body>
</html>