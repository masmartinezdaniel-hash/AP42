<?php

    $ejem = [   [1,12,4,8,0], 
                [23,48,3,7,9,6]
    ];

for ($i = 0; $i < count ($ejem); $i++){
    for ($j = 0; $j < count($ejem[$i]); $j++) {
        echo $ejem [$i] [$j] . ",";
    
    }
    echo "<br>";
}
?>