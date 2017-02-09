<?php

function count_arr($x)
{
    $count = 0;
    while (isset($x[$count])) {
        $count++;
    }
    return $count;
}

function insert_into_array($A,$index,$x){
    for ($i = count_arr($A) - 1; $i >= $index; $i--){
        $A[$i+1] = $A[$i];
    }
    $A[$index] = $x;
    return $A;
}
$A = Array(1, 14, -54, 67, 12, 0, 34, 5, -27, 54, 3);
$i = 0;
$k = 10;
$max = $A[$i];
$min = $A[$i];
while (isset($A[$i])) {
    if ($A[$i] < $min) {
        $min = $A[$i];
    }
    if ($A[$i] > $max) {
        $max = $A[$i];
    }
    $i++;
}
$B = Array();
$j = 0;
$i = 0;
while (isset($A[$i])) {
    if ($A[$i] == $max) {
        $j = $i + 1;
        $jOrig = $j;
        while ($j < $jOrig + $k) {
            $A = insert_into_array($A,$j,$min);
            $j++;
        }
        break;
    }
    $i++;
}
print_r($A);