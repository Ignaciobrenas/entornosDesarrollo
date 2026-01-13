<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>EJERCICIO 9</title></head>
<body>
<h1>EJERCICIO 9</h1>
<?php
$suma = 0;
for ($i = 1; $i <= 20; $i++) {
    $nota = rand(0, 10);
    $suma += $nota;

    if ($nota <= 4) {
        $texto = "Suspenso";
    } elseif ($nota <= 6) {
        $texto = "Aprobado";
    } elseif ($nota <= 8) {
        $texto = "Notable";
    } else {
        $texto = "Sobresaliente";
    }

    echo "$i : Nota = $nota : $texto<br>";
}
echo "<br>Suma: $suma";
$media = $suma / 20;
echo "<br>Media: $media";
?>
</body>
</html>