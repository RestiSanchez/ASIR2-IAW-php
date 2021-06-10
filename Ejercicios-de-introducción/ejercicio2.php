

<!-- Revise la documentación oficial de PHP para ver qué información podemos obtener de la
superglobal $_SERVER. Escribe un script haciendo uso de la variable superglobal $_SERVER que muestre
lo siguiente:
- La dirección IP del servidor donde se está ejecutando el script.
- El nombre del host del servidor donde se está ejecutando el script.
- El software que está utilizando el servidor para servir el script.
- Información sobre el agente de usuario (User Agent) desde el que se está solicitando el script.
- La dirección IP del cliente que está solicitando el script.
 -->

<?php

echo " IP del servidor: ";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo "nombre del host del servidor: ";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo "software que está utilizando el servidor: ";
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo "Información sobre el agente de usuario: ";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo "dirección IP del cliente: ";
echo $_SERVER['REMOTE_ADDR'];

?>