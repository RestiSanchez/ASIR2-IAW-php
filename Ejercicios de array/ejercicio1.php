<?php

// Paso 1. Declaración del array
$lista = array();

// Paso 2. Inicialización del array
for ($i=0; $i < 10; $i++) { 
    $lista[$i] = rand(1, 30);
}

// Paso 3. Imprimir el array
for ($i=0; $i < 10; $i++) { 
    echo $lista[$i];
    echo "<br>";
}

?>