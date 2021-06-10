<?php

$nombre = $_GET["nombre"];

if (empty($nombre)) {
    exit;
}

echo "<h1> Hola $nombre</h1>";
?>