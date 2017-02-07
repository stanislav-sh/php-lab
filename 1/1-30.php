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

$n = 100;
$i = $n;
$prevPrime = 1;
while ($i <= $n * $n) {
    if (is_prime($i)) {
        if ($i - $prevPrime == 2) {
            echo $i . ' - ' . $prevPrime . '<br>';
        }
        $prevPrime = $i;
    }
    $i++;
}