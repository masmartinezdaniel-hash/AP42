<?php

    $num = [[1,2,3,4], 
            [5,6,7,8]
    ];

for ($i = 0; $i < count ($num); $i++){
    $suma=0;
    for ($j = 0; $j < count($num[$i]); $j++) {
        $suma += $num [$i] [$j] ;
    
    }
    $numFila = $i + 1;
    echo "Fila $numFila: $suma<br>";
}
?>