<?php
$A = Array(
    Array(1, 2, 3),
    Array(4, 5, 6),
    Array(9, 8, 7));
$i = 0;
$sumMain = 0;
$sumAbove = 0;
$sumBelow = 0;
while (isset($A[$i])) {
    $j = 0;
    while (isset($A[$i][$j])) {
        if ($i == $j) {
            $sumMain += $A[$i][$j];
        }
        if ($i > $j) {
            $sumBelow += $A[$i][$j];
        }
        if ($i < $j) {
            $sumAbove += $A[$i][$j];
        }
        $j++;
    }
    $i++;
}
echo 'SumMain: ' . $sumMain . ' SumAbove: ' . $sumAbove . ' sumBelow: ' . $sumBelow;