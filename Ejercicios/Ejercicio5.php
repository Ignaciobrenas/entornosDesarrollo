<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>EJERCICIO 5</title></head>
<body>
<h1>EJERCICIO 5</h1>
<?php
$suma = 0;
$pares = 0;
$impares = 0;
echo "Numeros generados:<br>";
while ($suma <= 100) {
    $num = rand(0, 20);
    echo "$num ";
    $suma += $num;
    if ($num % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}
echo "<br>suma total: $suma <br>";
echo "pares: $pares  numeros <br>";
echo "impares: $impares numeros <br>";
?>
</body>
</html>
