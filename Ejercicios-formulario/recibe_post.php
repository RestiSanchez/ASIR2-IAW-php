<?php

$nombre = $_POST["nombre"];

if (empty($nombre)) {
    exit;
}

echo "<h1> Hola $nombre</h1>";
?>