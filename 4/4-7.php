<?php
$A = Array(
    Array(1,2,3),
    Array(4,5,6),
    Array(9,8,7));
$i = 0;
$maxAboveI = 0;
$maxAboveJ = 1;
$maxBelowI = 1;
$maxBelowJ = 0;
$maxAbove = $A[$maxAboveI][$maxAboveJ];
$maxBelow = $A[$maxBelowI][$maxBelowJ];
while(isset($A[$i])){
    $j = 0;
    while(isset($A[$i][$j])){
        if($i > $j && $A[$i][$j] > $maxBelow){
            $maxBelow = $A[$i][$j];
            $maxBelowI = $i;
            $maxBelowJ = $j;
        }
        if($i < $j && $A[$i][$j] > $maxAbove){
            $maxAbove = $A[$i][$j];
            $maxAboveI = $i;
            $maxAboveJ = $j;
        }
        $j++;
    }
    $i++;
}
$temp = $A[$maxAboveI][$maxAboveJ];
$A[$maxAboveI][$maxAboveJ] = $A[$maxBelowI][$maxBelowJ];
$A[$maxBelowI][$maxBelowJ] = $temp;
print_r($A);