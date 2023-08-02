<?php

$numeros = [200,10, 12, 15, 35, 98, 78, 12, 3, 9, 5, 52, 1, 77, 88, 99, 100, 45];
$reserva = 0;
$tamanho = count($numeros);

for ($i = 0; $i < $tamanho; $i++) {
    for ($j = 0; $j < $tamanho - 1; $j++) {
        if ($numeros[$j] > $numeros[$j + 1]) {
            $reserva = $numeros[$j];
            $numeros[$j] = $numeros[$j + 1];
            $numeros[$j + 1] = $reserva;
        }
    }
}

print_r($numeros);
?>