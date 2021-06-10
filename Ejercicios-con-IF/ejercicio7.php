<!-- Escribe un script PHP que realice la simulación de lanzar dos dados y muestre una imagen
con los valores obtenidos en cada uno de los dados -->

<?php

$DADO1 = rand(1, 6);
$DADO2 = rand(1, 6);

echo "<h1>Numero dado 1: $DADO1</h1>";
echo "<h1>Numero dado 2: $DADO2</h1>";

echo "<img src= 'images/dado$DADO1.png'>";
echo "<img src= 'images/dado$DADO2.png'>";

?>

