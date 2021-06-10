<?php

//DEFINE(NUM_ELEMENTOS, 10);

// Paso 1. Declaración del array
$lista = array();

// Paso 2. Inicialización del array
for ($i=0; $i < 10; $i++) { 
    $lista[$i] = rand(1, 30);
}

// Paso 3. Ordenamos el array
$lista = rsort($lista);

// Paso 4. Imprimir el array
for ($i=0; $i < 10; $i++) { 
    echo $lista[$i];
    echo "<br>";
}


?>