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

$suma = 0;
foreach ($lista as $clave) {
    $suma += $clave;
    $maximo = max($lista);
    $minimo = min($lista);
}

$numeros = count($lista);

$media = $suma / $numeros;

echo "<p>";
echo "La media es: $media";
echo "</p>";

echo "<p>";
echo " El valor máximo es: $maximo";
echo "</p>";

echo "El valor minimo es: $minimo";

?>