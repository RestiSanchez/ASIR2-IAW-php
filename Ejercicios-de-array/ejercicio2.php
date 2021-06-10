<?php

$lista = array();

for ($i=0; $i < 10; $i++) { 
    $lista[$i] = rand(1, 30);
}

for ($i=0; $i < 10; $i++) { 
    echo $lista[$i];
    echo "<br>";
}

$suma = 0;
foreach ($lista as $clave) {
    $suma += $clave;
}

$numeros = count($lista);

$media = $suma / $numeros;

echo "<br>";

echo "La media es : $media";

?>