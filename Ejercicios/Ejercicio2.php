<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>EJERCICIO 2</title></head>
<body>
<h1>EJERCICIO 2</h1>
<?php
$dia = 4;
switch ($dia) {
    case 1: echo "Hoy es lunes"; 
    break;
    case 2: echo "Hoy es martes"; 
    break;
    case 3: echo "Hoy es miércoles"; 
    break;
    case 4: echo "Hoy es jueves"; 
    break;
    case 5: echo "Hoy es viernes"; 
    break;
    case 6: echo "Hoy es sábado"; 
    break;
    case 7: echo "Hoy es domingo"; 
    break;
    default: echo "El valor no corresponde con ningún día";
}

?>
</body>
</html>
