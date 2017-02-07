<?php
function is_prime($n)
{
    if ($n == 1)
        return false;
    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i == 0)
            return false;
    }
    return true;
}

$m = 200;
$max = 0;
$maxNumber = 0;
for ($i = 1; $i <= $m; $i++) {
    $sum = 0;
    for ($j = 1; $j <= $i / 2; $j++) {
        if ($i % $j == 0 && is_prime($j)) {
            $sum += $j;
        }
    }
    if ($sum > $max) {
        $maxNumber = $i;
        $max = $sum;
    }

}
echo $maxNumber;