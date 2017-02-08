<?php
$A = Array(1, 14, -54, 67, 12, 0, 34, 5, -27, 54, 3);
$i = 0;
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
$i = 0;
while (isset($A[$i])) {
    if($A[$i] % 2 == 0) {
        $A[$i] = $max;
    }
    else if($A[$i] % 2 == 1 || $A[$i] % 2 == -1) {
        $A[$i] = $min;
    }
    $i++;
}

print_r($A);