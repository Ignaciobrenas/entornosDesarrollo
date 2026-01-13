<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>EJERCICIO 2</title>
</head>
<body>
<h1>EJERCICIO 2</h1>
<?php
if (isset($_GET['n1']) && isset($_GET['n2'])) {
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $variable = "";

    if ($n1 == $n2) {
        $variable = "igual";
    } else if ($n1 > $n2) {
        $variable = "mayor";
    } else {
        $variable = "menor";
    }


    echo "<h3>El numero $n1 es $variable que el numero $n2</h3>";
}
?>
<form method="get">
    <label for="n1">Numero 1</label>
    <input type="number" name="n1" id="n1" required><br><br>
    <label for="n2">Numero 2</label>
    <input type="number" name="n2" id="n2" required><br><br>
    <input type="submit" value="Enviar">
</form>
</body>
</html>