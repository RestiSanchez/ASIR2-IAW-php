<?php

$lista = array();

for ($i=0; $i < 10; $i++) { 
    $lista[$i] = rand(1, 30);
}
// Mayor a menor
$lista = rsort($lista);

for ($i=0; $i < 10; $i++) { 
    echo $lista[$i];
    echo "<br>";
}

?>