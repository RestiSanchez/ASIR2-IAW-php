<!-- Revise la documentación oficial para conocer todas las variables superglobal que existen.
Con ayuda de la función print_r muestra el contenido de cada una de las variables superglobal. -->


<?php

echo "<h3>\$GLOBALS</h3>";
#Con el pre te ordena la respuesta
echo "<pre>";
#Con el print muestra información sobre una variable
print_r($GLOBALS);
echo "</pre>";

echo "<h3>\$_SERVER</h3>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

echo "<h3>\$_GET</h3>";
echo "<pre>";
print_r($_GET);
echo "</pre>";

echo "<h3>\$_POST</h3>";
echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "<h3>\$_FILES</h3>";
echo "<pre>";
print_r($_FILES);
echo "</pre>";

echo "<h3>\$_COOKIE</h3>";
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

echo "<h3>\$_SESSION</h3>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo "<h3>\$_REQUEST</h3>";
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

echo "<h3>\$_ENV</h3>";
echo "<pre>";
print_r($_ENV);
echo "</pre>";
?>