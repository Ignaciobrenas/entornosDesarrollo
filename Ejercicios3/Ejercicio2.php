<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 2</title>
</head>
<body>
    <h1>EJERCICIO 2</h1>
<?php
$persona = [
    "nombre" => "Sara",
    "apellido" => "Martinez",
    "edad" => 23,
    "ciudad" => "Barcelona"
];

foreach ($persona as $clave => $valor) {
    echo "$clave: $valor<br>";
}
?>
</body>
