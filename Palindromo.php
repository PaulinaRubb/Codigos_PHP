<?php
function espalindromo($cadena){

    $cadena = strtolower(str_replace(" ","", $cadena));

    $cadenainvertida = strrev($cadena);

    if ($cadena === $cadenainvertida){
        return true;
    } else {
        return false;
    }
}

$frase = "anita lava la tina";

if (espalindromo($frase)) {
    echo ' " '. $frase.' "  es un palindromo.';
} else {
    echo ' " '.$frase. ' " no es un palindromo.';
}
?>