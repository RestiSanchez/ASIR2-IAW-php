<!-- Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen
con un valor aleatorio entre 1 y 6. 
Resuelva el ejercicio utilizando la estructura de control if-else -->

<?php

$DADO = rand(1, 6);

if ($DADO == 1) {
    echo "<img src='images/dado1.png'>";
} elseif ($DADO == 2) {
    echo "<img src='images/dado2.png'>";
} elseif ($DADO == 3) {
    echo "<img src='images/dado3.png'>";
} elseif ($DADO == 4) {
    echo "<img src='images/dado4.png'>";
} elseif ($DADO == 5) {
    echo "<img src='images/dado5.png'>";
} elseif ($DADO == 6) {
    echo "<img src='images/dado6.png'>";
}
?>