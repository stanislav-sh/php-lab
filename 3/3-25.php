<?php
$A = Array(1, 14, -54, 67, 12, 0, 34, 5, -27, 54, 3);
$i = 0;
$k = 10;
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
$B = Array();
$j = 0;
$i = 0;
while (isset($A[$i])) {
    $B[$i] = $A[$i];
    if ($A[$i] == $max) {
        $j = $i + 1;
        $jOrig = $j;
        while ($j < $jOrig + $k) {
            $B[$j] = $min;
            $j++;
        }
        break;
    }
    $i++;
}
$i++;
while (isset($A[$i])) {
    $B[$j] = $A[$i];
    $i++;
    $j++;
}
print_r($B);