<!-- Escribe un script PHP que genere un número aletorio entre 1 y 10, simulando una nota numérica y
muestre un mensaje indicando la clasificación obtenida teniendo en cuenta los iguientes rasgos: -->

<?php

$calificacion = rand (0,10);
echo "$calificacion";
echo "<br>";
if ($calificacion >= 0 and $calificacion < 5) {
    echo "Insuficiente";
} elseif ($calificacion >= 5 and $calificacion < 6) {
    echo "Suficiente";
} elseif ($calificacion >= 6 and $calificacion < 7) {
    echo "Bien";
} elseif ($calificacion >= 7 and $calificacion < 9) {
    echo "Notable";
} else {
    echo "Sobresaliente";
}
?>