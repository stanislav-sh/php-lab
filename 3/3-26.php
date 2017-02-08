<?php
$A = Array(1, 14, -54, 67, 12, 0, 34, 5, -27, 54, 3);
$i = 0;
$max = $A[$i];
while (isset($A[$i])) {
    if ($A[$i] > $max) {
        $max = $A[$i];
    }
    $i++;
}
$B = Array();
$j = 0;
$i = 0;
while(isset($A[$i])){
    $B[$j] = $A[$i];
    if($A[$i] % 2 == 0){
        $j++;
        $B[$j] = $max;
    }
    $i++;
    $j++;
}
print_r($B);