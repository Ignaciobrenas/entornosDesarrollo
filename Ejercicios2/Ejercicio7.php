

<!DOCTYPE html>
<html>
<head>
    <title>EJERCICIO 7</title>
</head>
<body>
<h1>EJERCICIO 7</h1>
<form method="get">
    <h3>Jugador 1</h3>
    <select name="jugador1">
        <option>Doraemon</option>
        <option>Nobita</option>
    </select>
    <select name="objeto1">
        <option>Sartén</option>
        <option>Dorayaki</option>
    </select>

    <h3>Jugador 2</h3>
    <select name="jugador2">
        <option>Doraemon</option>
        <option>Nobita</option>
    </select>
    <select name="objeto2">
        <option>Sartén</option>
        <option>Dorayaki</option>
    </select>

    <h3>Rondas (1-10):</h3>
    <input type="number" name="rondas" min="1" max="10">
    <br><br>
    <button type="submit">Luchar</button>
</form>
<?php
$luchadores = ["Doraemon", "Nobita"];
$objetos = [
    "Sartén" => [1, 8],  
    "Dorayaki" => [2, 4]  
];

function tirarDados($cantidad, $caras) {
    $total = 0;
    for ($i = 0; $i < $cantidad; $i++) {
        $total += rand(1, $caras);
    }
    return $total;
}

$imagenes = [
    "Doraemon" => "img/doraemon.jpg",
    "Nobita" => "img/nobita.jpg"
];

$jugador1 = $jugador2 = $objeto1 = $objeto2 = "";
$rondas = 0;
$victorias1 = $victorias2 = $empates = 0;
$resultados = [];

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["jugador1"], $_GET["objeto1"], $_GET["jugador2"], $_GET["objeto2"], $_GET["rondas"])) {
    $jugador1 = htmlspecialchars($_GET["jugador1"]);
    $objeto1 = htmlspecialchars($_GET["objeto1"]);
    $jugador2 = htmlspecialchars($_GET["jugador2"]);
    $objeto2 = htmlspecialchars($_GET["objeto2"]);
    $rondas = intval($_GET["rondas"]);

    if ($rondas >= 1 && $rondas <= 10 && isset($objetos[$objeto1]) && isset($objetos[$objeto2])) {
        for ($i = 1; $i <= $rondas; $i++) {
            $tirada1 = tirarDados($objetos[$objeto1][0], $objetos[$objeto1][1]);
            $tirada2 = tirarDados($objetos[$objeto2][0], $objetos[$objeto2][1]);

            if ($tirada1 > $tirada2) {
                $ganador = $jugador1;
                $victorias1++;
            } elseif ($tirada2 > $tirada1) {
                $ganador = $jugador2;
                $victorias2++;
            } else {
                $ganador = "Empate";
                $empates++;
            }

            $resultados[] = [
                "ronda" => $i,
                "tirada1" => $tirada1,
                "tirada2" => $tirada2,
                "ganador" => $ganador
            ];
        }
    }
}
?>

<?php if (!empty($resultados)): ?>
<h2>Resultados por ronda</h2>
<table>
    <tr>
        <th>Ronda</th>
        <th><?php echo $jugador1; ?></th>
        <th><?php echo $jugador2; ?></th>
        <th>Resultado</th>
    </tr>
    <?php foreach ($resultados as $r): ?>
    <tr>
        <td><?php echo $r["ronda"]; ?></td>
        <td><?php echo $r["tirada1"]; ?></td>
        <td><?php echo $r["tirada2"]; ?></td>
        <td><?php echo ($r["ganador"] == 'Empate') ? 'Empate' :  $r["ganador"]; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<h2>
<?php
if ($victorias1 > $victorias2) echo "Ha ganado $jugador1";
elseif ($victorias2 > $victorias1) echo "Ha ganado $jugador2";
else echo "Empate";
?>
</h2>

<div>
    <div>
        <img src="<?php echo $imagenes[$jugador1]; ?>" alt="<?php echo $jugador1; ?>" width="120">
        <p>Victorias <?php echo $jugador1; ?>: <?php echo $victorias1; ?></p>
    </div>
    <div>
        <img src="img/vs.png" alt="VS" width="100">
        <p>Rondas empatadas: <?php echo $empates; ?></p>
    </div>
    <div>
        <img src="<?php echo $imagenes[$jugador2]; ?>" alt="<?php echo $jugador2; ?>" width="120">
        <p>Victorias <?php echo $jugador2; ?>: <?php echo $victorias2; ?></p>
    </div>
</div>
<?php endif; ?>
</body>
</html>