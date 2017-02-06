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

$count = 0;
$i = 2;
$prevPrime = 1;
while ($count <= 10) {
    if (is_prime($i)) {
        if ($i - $prevPrime == 2) {
            echo $i . ' - ' . $prevPrime . '<br>';
            $count++;
        }
        $prevPrime = $i;
    }
    $i++;
}