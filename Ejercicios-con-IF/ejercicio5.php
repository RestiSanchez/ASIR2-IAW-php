<!-- Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen
con un valor aleatorio entre 1 y 6. Resuelva el ejercicio utilizando la estructura de control switch. -->

<?php

$DADO = rand(1, 6);

switch ($DADO) {
    case 1:
        echo "<img src='images/dado1.png'>";
        break;
    case 2:
        echo "<img src='images/dado2.png'>";
        break;
    case 3:
        echo "<img src='images/dado3.png'>";
       break;
    case 4:
        echo "<img src='images/dado4.png'>";
        break;
    case 5:
        echo "<img src='images/dado5.png'>";
        break;
    case 6:
         echo "<img src='images/dado6.png'>";
         break;
}

?>