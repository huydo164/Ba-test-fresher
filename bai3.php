<?php
function KhoangCachNhoNhat($array)
{
    $i = 0;
    $j = 0;
    $khoang_cach = abs($array[0] - $array[1]);
    $n = count($array);
    for ($i=0; $i<$n; $i++)
    {
        for ($j=$i+1; $j<$n; $j++)
            if (abs($array[$i] - $array[$j]) < $khoang_cach)
                $khoang_cach = abs($array[$i] - $array[$j]);
        echo("Cặp giá trị gần nhau: ");
        for ($i=0; $i<$n; $i++)
            for ($j=$i+1; $j<$n; $j++)
                if (abs($array[$i] - $array[$j]) == $khoang_cach)
                    echo("[" . $array[$i] . "," . $array[$j] . "]" . ', ');
    }
}

$array = [1, 5, 4, 7, 9, 0, -10, 13, 93, 14, 15];
print_r(KhoangCachNhoNhat($array));
