<!-- Escribe un script PHP que genere un número aleatorio entre 1 y 7, y muestre un mensaje
indicando a qué día de la semana corresponde. -->

<?php

$dia = rand(1, 7);

switch ($dia) {
    case 1:
        echo "Hoy es Lunes";
        break;
    
    case 2:
        echo "Hoy es Martes";
        break;

    case 3:
         echo "Hoy es Miercoles";
         break;

    case 4:
        echo "Hoy es Jueves";
        break;

     case 5:
        echo "Hoy es Viernes";
        break;

    case 6:
        echo "Hoy es Sabado";
        break;

    case 7:
        echo "Hoy es Domingo";
        break;                                        
}

?>