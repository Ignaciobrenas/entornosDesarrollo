<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 1</title>
</head>

<body>
    <h1>EJERCICIO 1</h1>
    
    <?php
    if (isset($_GET['name'])) {
        $name = htmlspecialchars($_GET['name']);
        $Surname = htmlspecialchars($_GET['Surname']);
        echo "<h3> Nombre:$name </h3>";
        echo "<h3> Apellido: $Surname</h3>";
    }
    ?>
    <form method="get">
        <label for="name">Nombre</label>
        <input type="name" name="name" id="name" required><br><br>

        <label for="Surname">Apellido:</label>
        <input type="Surname" name="Surname" id="Surname" required><br><br>

        <input type="submit" value="Enviar">
    </form>

</body>

</html>