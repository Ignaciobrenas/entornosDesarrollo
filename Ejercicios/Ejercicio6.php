<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>EJERCICIO 6</title></head>
<body>
<h1>EJERCICIO 6</h1>
<?php
for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0 || $i % 3 == 0) {
        echo "$i<br>";
    }
}
?>
</body>
</html>