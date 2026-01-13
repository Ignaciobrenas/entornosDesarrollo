<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 1</title>
</head>
<body>
    <h1>EJERCICIO 1</h1>
    
<?php
$persona = [
    "nombre" => "Ignacio",
    "apellido" => "Breñas",
    "edad" => 20,
    "ciudad" => "Barcelona"
];

foreach ($persona as $valor) {
    echo $valor . "<br>";
}
?>

</body>
