<?php 
    for ($i=1; $i <= 10; $i = $i + 1) { 
    //1 2 3 4 5 6 7 8 9 10
        for ($x=0; $x <= 10 ; $x = $x + 1) {
            $resultado = $i * $x; 
            //0 1 2 3 4 5 6 7 8 9 10
            echo $i . " X " . $x . " = " . $resultado . "<br>";
        } 
    } echo "<br>";
?>