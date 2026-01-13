<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 6</title>
</head>
<body>
    <h2>EJERCICIO 6</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label>Archivo</label>
        <input type="file" name="fileToUpload"><br><br>

        <label>Extension</label>
        <select name="extension">
            <option value="jpg">JPG</option>
            <option value="png">PNG</option>
            <option value="pdf">PDF</option>
        </select><br><br>

        <label>Tamaño MAX</label>
        <input type="number" name="maxSize" required><br><br>

        <input type="submit" value="UPLOAD" name="submit">
    </form>
    <hr>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
    $target_dir = "upload/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $errors = [];
    $selectedExtension = strtolower($_POST["extension"] ?? "");
    $maxSize = intval($_POST["maxSize"] ?? 0);
    $fileExtension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (empty($selectedExtension) || $maxSize <= 0) {
        $errors[] = "Por favor, selecciona extensión y tamaño máximo.";
        $uploadOk = 0;
    }
    if ($fileExtension != $selectedExtension) {
        $errors[] = "Error: La extensión del archivo no coincide";
        $uploadOk = 0;
    }
    if ($_FILES["fileToUpload"]["size"] > $maxSize) {
        $errors[] = "El archivo supera el tamaño máximo permitido";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "<h3>Errores encontrados:</h3>
        <ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "<p>Archivo subido correctamente: " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . "</p>";
        } else {
            echo "<p>Error al subir el archivo</p>";
        }
    }
}
?>
</body>
</html>