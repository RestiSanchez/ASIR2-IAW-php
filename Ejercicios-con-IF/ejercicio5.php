<!-- Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen
con un valor aleatorio entre 1 y 6. Resuelva el ejercicio utilizando la estructura de control switch. -->

<?php

$DADO = rand(1, 6);

switch ($DADO) {
    case 1:
        echo "<img src='images/cara1.svg'>";
# El break es para parar la función
        break;
    case 2:
        echo "<img src='images/cara2.svg'>";
        break;
    case 3:
        echo "<img src='images/cara3.svg'>";
       break;
    case 4:
        echo "<img src='images/cara4.svg'>";
        break;
    case 5:
        echo "<img src='images/cara5.svg'>";
        break;
    case 6:
         echo "<img src='images/cara6.svg'>";
         break;
}

?>