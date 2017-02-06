<?php
$n = 1;
$m = 2000;

for ($i = $n; $i <= $m; $i++) {
    $sum = 0;
    for ($j = 1; $j <= $i / 2; $j++) {
        if ($i % $j == 0) {
            $sum += $j;
        }
    }
    if ($i == $sum) {
        echo $i . ' ';
    }

}