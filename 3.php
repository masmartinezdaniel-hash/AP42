<?php
$num = [1,2,3,4,5,6,7,8,9];

$array = [[], []];

for ($i = 0; $i < count($num); $i++) {
    if ($num[$i] % 2 == 0) {
        $array[0][] = $num[$i];
    } else {
        $array[1][] = $num[$i];
    }
}

echo "Pares: ";
print_r($array[0]);

echo "Impares: ";
print_r($array[1]);
?>