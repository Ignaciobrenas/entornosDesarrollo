<!DOCTYPE html>
<html>
<head>
    <title>EJERCICIO 4</title>
</head>
<body>
<h1>EJERCICIO 4</h1>
<form action="" method="post" enctype="multipart/form-data">
    Archivo:
    <input type="file" name="archivo" required>
    <br><br>
    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "upload/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true); 
    }

    $target_file = $target_dir . basename($_FILES["archivo"]["name"]);

    if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $target_file)) {
        echo "El archivo " . htmlspecialchars(basename($_FILES["archivo"]["name"])) . " se ha subido correctamente.";
    } else {
        echo "Error al subir el archivo.";
    }
}
?>

</body>
</html>