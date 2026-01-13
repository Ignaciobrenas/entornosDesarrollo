<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 3</title>
</head>

<body>
    <h1>EJERCICIO 3</h1>
    <?php
    if (isset($_GET["num1"]) && isset($_GET["num2"])) {
        $n1 = (int)$_GET["num1"];
        $n2 = (int)$_GET["num2"];

        if ($n1 >= 0 && $n1 <= 20 && $n2 >= 0 && $n2 <= 20) {
            echo "<h3 style='color:red;'>Lista de menor a mayor</h3>";
            for ($i = min($n1, $n2); $i <= max($n1, $n2); $i++) {
                echo "<span style='color:red;'>$i </span>";
            }

            echo "<h3 style='color:blue;'>Lista de mayor a menor</h3>";
            for ($i = max($n1, $n2); $i >= min($n1, $n2); $i--) {
                echo "<span style='color:blue;'>$i </span>";
            }
        } else {
            echo "<p style='color:red;'>Introduce números entre 0 y 20.</p>";
        }
    }
    ?>

    <form method="get">
        Numero 1: <input type="number" name="num1" min="0" max="20" required>
        Numero 2: <input type="number" name="num2" min="0" max="20" required>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>