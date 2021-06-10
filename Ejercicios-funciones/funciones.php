<?php

function imprimir_tabla_multiplicar($numero){
    echo "<table>";
    for ($i=0; $i <= 10; $i++) { 
        echo "<tr>";
        echo "<td>$numero</td>";
        echo "<td>x</td>";
        echo "<td> $i </td>";
        echo $resultado = $numero*$i;
        echo "<td> $resultado</td>";
        echo "</tr>";
    }
}

?>