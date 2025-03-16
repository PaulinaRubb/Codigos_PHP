<?php
function realizarOperaciones($a, $b) {
    $suma = $a + $b;
    $resta = $a - $b;
    $multiplicacion = $a * $b;
    $division = $a / $b;

    echo "Suma: " . $suma . "<br>";
    echo "Resta: " . $resta . "<br>";
    echo "Multiplicación: " . $multiplicacion . "<br>";
    echo "División: " . $division . "<br>";
}

$numero1 = 5; 
$numero2 = 10; 

realizarOperaciones($numero1, $numero2);
?>
