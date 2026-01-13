<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>FORMULARIO</title>
</head>

<body>
    <h1>FORMULARIO</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $name = htmlspecialchars($_GET["name"]);
        echo "<h3>Hola, $name!</h3>";
        $email = htmlspecialchars($_GET['email']);
        $password = htmlspecialchars($_GET['password']);

        if ($email === "ignaciobrenas@gmail.com" && $password === "123") {
            echo "<h1>Acceso concedido</h1>";
        } else {
            echo "<h1>Acceso denegado</h1>";
        }
        
    }

    ?>

    <form method="GET" action="">
        <label for="name">name</label>
        <input type="name" name="name" id="name" required><br><br>

        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" value="Enviar">
    </form>


</body>

</html>