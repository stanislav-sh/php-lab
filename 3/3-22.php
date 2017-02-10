<?php
$A = Array(1, 1, 105, -54, -112, 12, 0, 105, 5, 5, 0, -27, -112, 54, 3, 3);
$B = Array();
$i = 0;
while (isset($A[$i])) {
    $j = $i + 1;
    while (isset($A[$j])) {
        if ($A[$i] == $A[$j]) {
            $j++;
            $B[$A[$i]] = 0;
            continue;
        }
        if (!isset($max)) {
            $max = $A[$i];
        }
        $j++;
    }
    if (!isset($B[$A[$i]]) && isset($max)) {
        if ($A[$i] > $max){
            $max = $A[$i];
        }
    }
    $i++;
}
echo isset($max) ? $max : "No such variable found";