<?php
$A = Array(67, 14, -54, 67, 12, 67, 34, 67, -27, 54, 67);
$i = 0;
$max = $A[$i];
while (isset($A[$i])) {
    if($A[$i] > $max){
        $max = $A[$i];
    }
    $i++;
}
$i = 0;
while (isset($A[$i])) {
    if($A[$i] == $max){
        $A[$i] = $i;
    }
    $i++;
}
print_r($A);