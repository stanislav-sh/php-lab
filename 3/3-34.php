<?php
function insert_into_array($A, $index, $x)
{
    for ($i = count_arr($A) - 1; $i >= $index; $i--) {
        $A[$i + 1] = $A[$i];
    }
    $A[$index] = $x;
    return $A;
}

function count_arr($x)
{
    $count = 0;
    while (isset($x[$count])) {
        $count++;
    }
    return $count;
}

function arrsort($arr)
{
    $size = count($arr);
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size - 1 - $i; $j++) {
            if ($arr[$j + 1] < $arr[$j]) {
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $tmp;
            }
        }
    }
    return $arr;
}

$A = Array(2, 14, -54, 67, 12, 0, 34, 5, -27, 54, 3);
$k = 5;
$B = Array(0,-5,2,2000,-100);
$A = arrsort($A);
for($j = 0; $j < $k; $j++) {
    $i = 0;
    while (isset($A[$i])) {
        if ($B[$j] <= $A[$i]) {
            $A = insert_into_array($A, $i, $B[$j]);
            break;
        }
        $i++;
    }
    $A[$i] = $B[$j];
}
print_r($A);