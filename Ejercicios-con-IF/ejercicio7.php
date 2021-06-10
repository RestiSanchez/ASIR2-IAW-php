<!-- Escribe un script PHP que realice la simulación de lanzar dos dados y muestre una imagen
con los valores obtenidos en cada uno de los dados -->

<?php

$DADO1 = rand(1, 6);
$DADO2 = rand(1, 6);

echo "<h2>Numero dado 1: $DADO1</h2>";
echo "<h2>Numero dado 2: $DADO2</h2>";

echo "<img src= 'images/cara$DADO1.svg'>";
echo "<img src= 'images/cara$DADO2.svg'>";

?>

