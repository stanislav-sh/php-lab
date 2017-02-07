<?php
$A = Array(1, 14, -54, 0, 53, 0, 34, 5, -27, 54, 3);
$i = 0;
if(!isset($A[$i+1])){
    echo 'Array is too small';
    exit;
}
$max = $A[$i] + $A[$i+1];
$maxndx = 0;
while(isset($A[$i]) && isset($A[$i+1])){
    if($A[$i] + $A[$i+1] > $max){
        $max = $A[$i] + $A[$i+1];
        $maxndx = $i;
    }
    $i++;
}
$min = $A[$i] + $A[$i-1];
$minndx = $i;
while($i>0){
    if($A[$i] + $A[$i-1] < $min){
        $min = $A[$i] + $A[$i-1];
        $minndx = $i;
    }
    $i--;
}
echo 'Max: '.$maxndx.' Min:'. $minndx;