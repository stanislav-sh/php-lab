<?php
$A = Array(
    Array(3, 2, 3),
    Array(27, 81, 8310),
    Array(81, 1, 8320));
$B = Array();
$p = 3;
$i = 0;
$sum = 0;
while (isset($A[$i])){
    $B[$i] = true;
    $i++;
}
$i = 0;
while (isset($A[$i])) {
    $j = 0;
    while (isset($A[$i][$j])) {
        if($A[$i][$j] % $p != 0){
            $B[$j] = false;
        }
        $j++;
    }
    $i++;
}
$i = 0;
while (isset($A[$i])) {
    $j = 0;
    while (isset($A[$i][$j])) {
        if($B[$j]){
            $sum += $A[$i][$j];
        }
        $j++;
    }
    $i++;
}
echo 'Sum:'. $sum;