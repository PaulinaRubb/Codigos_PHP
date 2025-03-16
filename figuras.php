<?php

function calcularArea($figura, $dimensiones) {
    switch ($figura) {
        case 'Esfera':
            return 4 * pi() * pow($dimensiones['r'], 2);
        case 'Cubo':
            return 6 * pow($dimensiones['l'], 2);
        case 'Prisma Rectangular':
            return 2 * ($dimensiones['l'] * $dimensiones['w'] + $dimensiones['l'] * $dimensiones['h'] + $dimensiones['w'] * $dimensiones['h']);
        case 'Cono':
            return pi() * $dimensiones['r'] * ($dimensiones['r'] + sqrt(pow($dimensiones['r'], 2) + pow($dimensiones['h'], 2)));
        case 'Cilindro':
            return 2 * pi() * $dimensiones['r'] * ($dimensiones['r'] + $dimensiones['h']);
        default:
            return 0;
    }
}

function calcularPerimetro($figura, $dimensiones) {
    switch ($figura) {
        case 'Esfera':
            return 2 * pi() * $dimensiones['r'];
        case 'Cubo':
            return 12 * $dimensiones['l'];
        case 'Prisma Rectangular':
            return 4 * ($dimensiones['l'] + $dimensiones['w'] + $dimensiones['h']);
        case 'Cono':
            return 2 * pi() * $dimensiones['r'];
        case 'Cilindro':
            return 2 * pi() * $dimensiones['r'];
        default:
            return 0;
    }
}

function calcularVolumen($figura, $dimensiones) {
    switch ($figura) {
        case 'Esfera':
            return (4 / 3) * pi() * pow($dimensiones['r'], 3);
        case 'Cubo':
            return pow($dimensiones['l'], 3);
        case 'Prisma Rectangular':
            return $dimensiones['l'] * $dimensiones['w'] * $dimensiones['h'];
        case 'Cono':
            return (1 / 3) * pi() * pow($dimensiones['r'], 2) * $dimensiones['h'];
        case 'Cilindro':
            return pi() * pow($dimensiones['r'], 2) * $dimensiones['h'];
        default:
            return 0;
    }
}

// Medidas preestablecidas
$figuras = [
    'Esfera' => ['r' => 5],
    'Cubo' => ['l' => 3],
    'Prisma Rectangular' => ['l' => 4, 'w' => 3, 'h' => 2],
    'Cono' => ['r' => 3, 'h' => 7],
    'Cilindro' => ['r' => 3, 'h' => 5]
];

// Calcular y mostrar los resultados para cada figura
foreach ($figuras as $figura => $dimensiones) {
    $area = calcularArea($figura, $dimensiones);
    $perimetro = calcularPerimetro($figura, $dimensiones);
    $volumen = calcularVolumen($figura, $dimensiones);

    echo "\nFigura: $figura\n";
    echo "Área: $area\n";
    echo "Perímetro: $perimetro\n";
    echo "Volumen: $volumen\n";
    echo "-----------------------------------\n";  // Línea de separación para cada figura
}
?>
