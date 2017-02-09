<?php
$A = Array(
    Array(1, 2, 3, 6),
    Array(4, 5, 6, 9),
    Array(0, 1, 2, 0));
$i = 0;
while (isset($A[$i])) {
    $sumRow = 0;
    $j = 0;
    while (isset($A[$i][$j])) {
        $sumRow += $A[$i][$j];
        $j++;
    }
    if (!isset($min)) {
        $min = $sumRow / $j;
        $minNdx = $i;
    } else {
        if (($sumRow / $j) < $min) {
            $min = ($sumRow / $j);
            $minNdx = $i;
        }
    }
    $i++;
}
echo 'Row number: ' . ($minNdx + 1);