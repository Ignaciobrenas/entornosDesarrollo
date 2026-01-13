<!DOCTYPE html>
<html>

<head>
    <title>EJERCICIO 5</title>
    <style>
        .par {
            color: green;
        }
        .impar {
            color: orange;
        }
    </style>
</head>

<body>
     <h1>EJERCICIO 5</h1>
    <h2>Datos Personales</h2>

    <form action="" method="get">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label>Número 1 (0-15):</label>
        <input type="number" name="num1" min="0" max="15" required><br>
        <label>Número 2 (0-15):</label>
        <input type="number" name="num2" min="0" max="15" required><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
    if (isset($_GET['enviar'])) {
        $nombre = htmlspecialchars($_GET['nombre']);
        $n1 = intval($_GET['num1']);
        $n2 = intval($_GET['num2']);
        echo "<h2>Bienvenido, $nombre</h2>";
        echo "<p>$n1 es " . ($n1 % 2 == 0 ? "par" : "impar") . " y $n2 es " . ($n2 % 2 == 0 ? "par" : "impar") . ".</p>";
        $inicio = min($n1, $n2);
        $fin = max($n1, $n2);
        for ($i = $inicio; $i <= $fin; $i++) {
            $clase = ($i % 2 == 0) ? "par" : "impar";
            echo "<div class='$clase'>$i</div>";
        }
    }
    ?>
</body>

</html>