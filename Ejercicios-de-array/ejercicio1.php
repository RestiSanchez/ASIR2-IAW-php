<?php

$lista = array();

//Inicializamos el array
for ($i=0; $i < 10; $i++) { 
    $lista[$i] = rand(1, 30);
}

//Imprimimos por pantalla el array
for ($i=0; $i < 10; $i++) { 
    echo $lista[$i];
    echo "<br>";
}

?>