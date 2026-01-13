<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIOS ARRAY PHP</title>
</head>
<body>
    <h1>EJERCICIOS ARRAY PHP</h1>
    
<?php

echo "<h2>EJERCICIO 1</h2>";

$persona = [
    "nombre" => "Ignacio",
    "apellido" => "Breñas",
    "edad" => 20,
    "ciudad" => "Barcelona"
];

$contador = 1;
foreach ($persona as $valor) {
    echo "Dato " . $contador . ": " . $valor . "<br>";
    $contador++;
}



echo "<h2>EJERCICIO 2</h2>";

$contador = 1;
foreach ($persona as $clave => $valor) {
    echo  $clave . ": " . $valor . "<br>";
    $contador++;
}



echo "<h2>EJERCICIO 3</h2>";

$persona["edad"] = 24;

$contador = 1;
foreach ($persona as $clave => $valor) {
    echo "Dato " . $contador . " - " . $clave . ": " . $valor . "<br>";
    $contador++;
}


echo "<h2>EJERCICIO 4</h2>";


var_dump($persona);





echo "<h2>EJERCICIO 5</h2>";

$letters = "a,b,c,d,e,f";
$arrayLetras = explode(",", $letters);

rsort($arrayLetras);

$contador = 1;
foreach ($arrayLetras as $letra) {
    echo "Letra " . $contador . ": " . $letra . "<br>";
    $contador++;
}






echo "<h2>EJERCICIO  6</h2>";

$notas = [
    "Ignacio" => 10,
    "Elyas" => 6,
    "Gorka" => 7,
    "Ian" => 8,
    "Iker" => 4,
    "Ishak" => 9
];

arsort($notas);

$contador = 1;

foreach ($notas as $alumno => $nota) {
    echo "Alumno " . $contador . " - " . $alumno . ": " . $nota . "<br>";
    $contador++;
}

echo "<h2>EJERCICIO 7</h2>";
$media = array_sum($notas) / count($notas);


echo "media de las notas es: "  .$media.   "<br>";


echo "<h2>EJERCICIO 8</h2>";

echo "la nota mas alta es: " . max($notas) . "<br>";
echo "el mejor alumno es: " . array_search(max($notas), $notas) . "<br>";



?>

</body>


</html>