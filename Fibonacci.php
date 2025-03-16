<?php

function fibonacci($n) {
    $fib = [0, 1];  // Los dos primeros números de la serie

    // Calcular los siguientes términos
    for ($i = 2; $i < $n; $i++) {
        $fib[] = $fib[$i - 1] + $fib[$i - 2];
    }

    return $fib;
}

// Ejemplo: Obtener los primeros 10 números de Fibonacci
$n = 10;
$fibonacci_sequence = fibonacci($n);

// Mostrar la secuencia
echo "Los primeros $n números de Fibonacci son: ";
echo implode(", ", $fibonacci_sequence);
?>
