<?php
function gcd($x, $y)
{
    if ($y != 0) {
        return gcd($y, $x % $y);
    } else {
        return $x;
    }
}

$N = 3;
$M = 7;
if (gcd($N, $M) == 1)
    echo "True";
else
    echo "False";