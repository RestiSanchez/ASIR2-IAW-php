<!-- Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen
con un valor aleatorio entre 1 y 6. 
Resuelva el ejercicio utilizando la estructura de control if-else -->

<?php

$DADO = rand(1, 6);

if ($DADO == 1) {
    echo "<img src='images/cara1.svg'>";
} elseif ($DADO == 2) {
    echo "<img src='images/cara2.svg'>";
} elseif ($DADO == 3) {
    echo "<img src='images/cara3.svg'>";
} elseif ($DADO == 4) {
    echo "<img src='images/cara4.svg'>";
} elseif ($DADO == 5) {
    echo "<img src='images/cara5.svg'>";
} elseif ($DADO == 6) {
    echo "<img src='images/cara6.svg'>";
}
?>