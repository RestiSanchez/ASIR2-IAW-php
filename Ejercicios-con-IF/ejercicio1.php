<!-- Escribe un script que simule el comportamiento de lanzar una moneda al aire y muestre 
una imagen con la cara o la cruz de la moneda -->

<?php

$MONEDA = rand(0, 1);

if ($MONEDA == 0) {
    echo "<img src='images/cara.jpg'>";
} else {
    echo "<img src='images/cruz.jpg'>";
}
?>
