<?php 
    $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    echo '<table>';
    foreach ($numeros as $x); {
        echo '<tr>';
        foreach ($numeros as $y); {
            echo '<td>' . ($x * $y) . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
?>