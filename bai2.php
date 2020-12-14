<?php

function MaxTotal($array) {
    $total = 0;
    $i=0;
    $j=0;
    $n = count($array);
    for ($i = 0; $i < $n - 2; $i++) {
        for ($j = $i + 1; $j < $n - 1; $j++) {
            if ($total < $array[$i] + $array[$j] ){
                $total = $array[$i] + $array[$j] ;
            }
        }
    }
    return $total;
}
$array = [0, 100, -4, 8, 143, 5, 99, 100];
echo MaxTotal($array);