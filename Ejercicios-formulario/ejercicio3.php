<?php  
$n=$_POST['numero'];

if ($n<1 or $n>10) {
    echo "Debes escribir un número entre el 1 y el 10.";
    }
else {
     echo "<h4>Esta es la tabla del $n:</h4>";
     $i=1;
     while ($i<=10) {
           echo "$n x $i = ".$n*$i."<br/>";
           $i++;
        } 
     }
?>