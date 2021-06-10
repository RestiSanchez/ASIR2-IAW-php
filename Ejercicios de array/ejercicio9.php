<?php

$lista = array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");

echo "<h2> Ordenación de menor a mayor </h2>";

// Ordenamos el array de menor a mayor
asort($lista);

// Imprimimos el array
foreach ($lista as $clave => $valor) {
    echo "Clave: $clave - Valor: $valor";
    echo "<br>";

}

echo "<h2> Ordenación de mayor a menor </h2>";

// Ordenamos el array de mayor a menor
arsort($lista);

// Imprimimos el array
foreach ($lista AS $clave => $valor) {
    echo "Clave: $clave - Valor: $valor";
    echo "<br>";

}

echo "<h2> Ordenación de menor a mayor por la clave </h2>";

// Ordenamos el array de mayor a menor
ksort($lista);

// Imprimimos el array
foreach ($lista AS $clave => $valor) {
    echo "Clave: $clave - Valor: $valor";
    echo "<br>";

}

echo "<h2> Ordenación de mayor a menor por la clave</h2>";

// Ordenamos el array de mayor a menor
krsort($lista);

// Imprimimos el array
foreach ($lista AS $clave => $valor) {
    echo "Clave: $clave - Valor: $valor";
    echo "<br>";

}

?>