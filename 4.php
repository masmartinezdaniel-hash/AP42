<?php
$array = [
    [1, 5, 8, 5],
    [7, 3, 2, 4],
    [1, 6, 2, 4]
];

$resultado = [];

for ($i = 0; $i < count($array[0]); $i++) {

    $fila = [];

    for ($j = 0; $j < count($array); $j++) {

        $fila[] = $array[$j][$i];

    }

    $resultado[] = $fila;
}

print_r($resultado);

?>