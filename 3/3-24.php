<?php
$A = Array(1, 0, 14, 0, 0, 12, 0, 0,0, 5, 0, -27, 0, -54,0,0 -103, 3);
$i = 0;
$sum = 0;
$summax = 0;
while (isset($A[$i])) {
    if ($A[$i] != 0) {
        $sum = 0;
        $i++;
        continue;
    }
    $sum++;

    if ($sum > $summax) {
        $summax = $sum;
        if (isset($A[$i + 1])) {
            if ($A[$i + 1] != 0) {
                $ifinish = $i;
            }
        } else {
            $ifinish = $i;
        }
    }
    $i++;
}
echo isset($ifinish) ? "Start - ".($ifinish-$summax + 1).' Finish: '.$ifinish : "No zeroes";