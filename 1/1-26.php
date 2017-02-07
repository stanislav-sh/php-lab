<?php
$m = 200;
$max = 0;
$maxNumber = 0;
for ($i = 1; $i <= $m; $i++) {
    $sum = 0;
    for ($j = 1; $j <= $i / 2; $j++) {
        if ($i % $j == 0) {
            $sum += $j;
        }
    }
    if ($sum > $max) {
        $maxNumber = $i;
        $max = $sum;
    }

}
echo $maxNumber;