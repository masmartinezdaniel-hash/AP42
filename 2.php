<?php
$numeros = [
    [1, 2, 3, 4],
    [5, 6, 7, 8]
];


if (count($numeros[0]) != count($numeros[1])) {
    echo "Error: las filas no son iguales.";
} else {
        for ($j = 0; $j < count($numeros[0]); $j++) {
        $suma = $numeros[0][$j] + $numeros[1][$j];
        echo "Columna " . ($j + 1) . ": " . $suma . "<br>";
    }
}
?>