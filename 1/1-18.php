<?php
function digitsSum($x)
{
    $sum = 0;
    for ($j = 1; $j <= $x / 2; $j++) {
        if ($x % $j == 0) {
            $sum += $j;
        }
    }
    return $sum;
}

$n = 1;
$m = 2000;

for ($i = $n; $i <= $m; $i++) {

    $j = digitsSum($i);
    if ($i < $j && digitsSum($j) == $i) {
        echo $i . ' ' . $j . '<br>';
    }
}