<?php
// Definir un array con 10 números aleatorios
$numeros = array(2, 5, 3, 7, 4, 6, 9, 1, 8, 10);

// Función para calcular el factorial de un número
function factorial($num)
{
    if ($num === 0 || $num === 1) {
        return 1;
    } else {
        return $num * factorial($num - 1);
    }
}

// Calcular y mostrar el factorial de cada número del array
foreach ($numeros as $numero) {
    $factorial = factorial($numero);
    echo "Factorial de $numero: $factorial<br>";
}
