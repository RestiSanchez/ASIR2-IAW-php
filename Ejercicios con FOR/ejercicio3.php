<!-- Escribe un script PHP que muestre la tabla los números pares que existen entre 
1 y 100. Utiliza un bucle for -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio3</title>
</head>
<body>
    <table border="1">
        <tr>
            <?php

            for ($i=2; $i <= 100 ; $i=$i+2) { 
    
                echo "<td>$i</td>";
            }

            ?>
        </tr>
</body>
</html>