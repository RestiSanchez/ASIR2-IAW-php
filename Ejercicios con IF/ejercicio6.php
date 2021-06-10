<!-- Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen con un valor
aleatorio entre 1 y 6. Resuelva el ejercicio sin utilizar la estructuras de control if-else y switch. -->

<?php

$DADO = rand(1, 6);

echo "<h2>Numero: $DADO</h2>";

echo "<img src= 'images/cara$dado.svg'>";

?>