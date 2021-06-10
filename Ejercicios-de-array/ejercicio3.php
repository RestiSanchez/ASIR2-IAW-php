<?php

$lista = array();

for ($i=0; $i < 10; $i++) { 
    $lista[$i] = rand(1, 30);
}

for ($i=0; $i < 10; $i++) { 
    echo $lista[$i];
    echo "<br>";
}

$maximo = max( $lista );

echo "<br>";

echo " El valor máximo es : $maximo";

?>