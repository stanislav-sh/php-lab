<?php
$A = Array(1, 14, -54, 67, 12, 0, 34, 5, -27, 54, 3);
$i = 0;
$max = $A[$i];
$maxndx = 0;
$negndx = false;
while (isset($A[$i])) {
    if($A[$i] > $max){
        $max = $A[$i];
        $maxndx = $i;
    }
    if ($A[$i] < 0) {
        $negndx = $i;
    }
    $i++;
}
if (!is_numeric($negndx)) {
    echo 'No negatives';
    exit;
}
$temp = $A[$maxndx];
$A[$maxndx] = $A[$negndx];
$A[$negndx] = $temp;
print_r($A);