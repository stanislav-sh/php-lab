<?php
$A = Array(1, 14, -54, 67, 12, 0, 34, 5, -27, 54, 3);
$i = 0;
$max = $A[$i];
$min = $A[$i];
$maxndx = 0;
$minndx = 0;
while (isset($A[$i])) {
    if ($A[$i] < $min) {
        $min = $A[$i];
        $minndx = $i;
    }
    if($A[$i] > $max){
        $max = $A[$i];
        $maxndx = $i;
    }
    $i++;
}

$temp = $A[$maxndx];
$A[$maxndx] = $A[$minndx];
$A[$minndx] = $temp;
print_r($A);