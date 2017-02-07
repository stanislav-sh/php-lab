<?php
$A = Array(1, 14, -54, 67, 12, 0, 34, 5, -27, 54, 3);
$B = Array();
$i = 10;
$j = 0;
while(isset($A[$j]) && $j < $i){
    $sum = 0;
    for($k = 0; $k <= $j; $k++){
        $sum += $A[$k];
    }
    $B[$j] = $sum / $k+1;
    $j++;
}
print_r($B);