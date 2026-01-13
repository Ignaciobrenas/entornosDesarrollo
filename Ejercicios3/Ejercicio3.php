
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 3</title>
</head>
<body>
    <h1>EJERCICIO 3</h1>
<?php
$persona = [
      "nombre" => "Ignacio",
    "apellido" => "Breñas",
    "edad" => 20,
    "ciudad" => "Barcelona"
];

$persona["edad"] = 24;

foreach ($persona as $valor) {
    echo $valor . "<br>";
}
?>
</body>
</html>