<?php
$n = 1;
$m = 200;
$max = 0;
for ($i = $n; $i <= $m; $i++) {
    $sum = 0;
    for ($j = 1; $j <= $i / 2; $j++) {
        if ($i % $j == 0) {
            $sum += $j;
        }
    }
    if ($sum > $max) {
        $max = $sum;
    }

}
echo $max;