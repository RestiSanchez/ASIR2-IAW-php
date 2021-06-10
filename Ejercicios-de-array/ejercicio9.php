<?php

$lista = array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");

echo "<h2> Ordenación de menor a mayor </h2>";

asort($lista);

foreach ($lista as $clave => $valor) {
    echo "Clave: $clave - Valor: $valor";
    echo "<br>";

}

echo "<h2> Ordenación de mayor a menor </h2>";

arsort($lista);

foreach ($lista AS $clave => $valor) {
    echo "Clave: $clave - Valor: $valor";
    echo "<br>";

}

echo "<h2> Ordenación de menor a mayor por la clave </h2>";

ksort($lista);

foreach ($lista AS $clave => $valor) {
    echo "Clave: $clave - Valor: $valor";
    echo "<br>";

}

echo "<h2> Ordenación de mayor a menor por la clave</h2>";

// Descendentemente mayor a menor
krsort($lista);

// Imprimimos
foreach ($lista AS $clave => $valor) {
    echo "Clave: $clave - Valor: $valor";
    echo "<br>";

}

?>