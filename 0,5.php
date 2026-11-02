<?php
//  (?filas= &columnas= )
$filas = $_GET['filas'];
$columnas = $_GET['columnas'];


$arr = [];


for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        $arr[$i][$j] = rand(1, 100);
    }
}


for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        echo $arr[$i][$j] . " ";
    }
    echo "<br>"; 
}
