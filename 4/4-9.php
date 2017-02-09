<?php
$A = Array(
    Array(3, -2, -3),
    Array(-27, -81, 8310),
    Array(81, -1, 8320));
$B = Array();
$i = 0;
$sum = 0;
while (isset($A[$i])) {
    $B[$i] = true;
    $i++;
}
$i = 0;
while (isset($A[$i])) {
    $j = 0;
    while (isset($A[$i][$j])) {
        if ($A[$i][$j] >= 0) {
            $B[$j] = false;
        }
        $j++;
    }
    $i++;
}
$i = 0;
while (isset($A[$i])) {
    $j = 0;
    while (isset($A[$i][$j])) {
        $sum = 0;
        if ($B[$j]) {
            $count = 0;
            $N= $A[$i][$j];
            while ($N != 0) {
                $number = $N % 10;
                $sum+=$number;
                $N = (int)($N / 10);
            }
            $A[$i][$j] = $sum;
        }
        $j++;
    }
    $i++;
}
print_r($A);