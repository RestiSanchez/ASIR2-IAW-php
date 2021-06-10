<?php

$numero =$_GET["numero"];
$tipo =$_GET["tipo"];

if (empty($numero) || empty($tipo)) {
    header('Location: ejercicio4.php');
    exit;
 }

echo "<h2>Número y Tipo de monedas: $numero y $tipo</h2>";



$lista = array();

// Inicializamos el array. GET nos dara el nº de lanzamientos y monedas
for($i = 0; $i < $numero; $i++) {
    $lista[$i] = rand(0, 1);
}

// Mostramos las monedas dependiendo del tipo
switch ($tipo) {
    case "dollar":
        for ($i = 0; $i < $numero; $i++) {
            if ($lista[$i] == 0) {
                echo "<img src='imgs/dollar_cara.jpg'>";
            } else {
                echo "<img src='imgs/dollar_cruz.jpg'>";
            }
        }

        break;
    case "euro":
        for ($i = 0; $i < $numero; $i++) {
            if ($lista[$i] == 0) {
                echo "<img src='imgs/euro_cara.jpg'>";
            } else {
                echo "<img src='imgs/euro_cruz.jpg'>";
            }
        }
    
        break;
    case "yen":
        for ($i = 0; $i < $numero; $i++) {
            if ($lista[$i] == 0) {
                echo "<img src='imgs/yen_cara.jpg'>";
            } else {
                echo "<img src='imgs/yen_cruz.jpg'>";
            }
        }
    
        break;

    case "franco":
        for ($i = 0; $i < $numero; $i++) {
            if ($lista[$i] == 0) {
                echo "<img src='imgs/franco_cara.jpg'>";
            } else {
                echo "<img src='imgs/franco_cruz.jpg'>";
            }
        }
    
        break;

    case "libra":
        for ($i = 0; $i < $numero; $i++) {
            if ($lista[$i] == 0) {
                echo "<img src='imgs/libra_cara.jpg'>";
            } else {
                echo "<img src='imgs/libra_cruz.jpg'>";
            }
        }
        break;
}
    
        


?>