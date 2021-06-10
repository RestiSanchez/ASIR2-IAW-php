<!-- Escribe un script PHP que muestre la tabla de multiplar de un númera aleatorio. 
Utiliza un bucle for -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio4</title>
</head>
<body>
    <table border="1">
        
            <?php
                $num = rand(1, 10);
# Iniciamos la variable y asignamos que cuente del 1 al 10.
                for ($i=0; $i <= 10 ; $i++) { 
# El resultado será la múltiplicación del $num por 1,2,3,4.. hasta el 10.
                    $result = $num*$i;
                    echo "<tr>";
                    echo "<td>$num*$i = $result</td>";
                    echo "</tr>";
            }
        
            ?>
        
</body>
</html>