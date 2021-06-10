<!-- Escribe un PHP que muestre las tablas de multiplicar del 1 al 10. 
Utilizar un bucle for -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio5</title>
</head>
<body>
    <table border="3">
        <tr>
            <?php

                for ($num=1; $num <= 10 ; $num++) { 
                    echo "<tr>";
                    echo "<td>";
                    echo "Tabla de Multiplicar del $num";
                    for ($i=0; $i <=10 ; $i++) { 
                        $result = $num*$i;
                        
                        echo "<td>$num*$i = $result</td>";
                        
                    }
                    echo "</td>";
                    echo "</tr>";
                    
            }
        
            ?>
        </tr5>
</body>
</html>