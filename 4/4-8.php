<?php
function findMinMaxAndIndices($x)
{
    $i = 0;
    $minndx = 0;
    $maxndx = 0;
    $min = $x[0];
    $max = $x[0];
    while (isset($x[$i])) {
        if ($x[$i] < $min) {
            $minndx = $i;
            $min = $x[$i];
        }
        if ($x[$i] > $max) {
            $max = $x[$i];
            $maxndx = $i;
        }
        $i++;
    }
    return Array($min, $minndx, $max, $maxndx);
}

$A = Array(
    Array(-1, 2, 3),
    Array(4, -5, 6),
    Array(9, 8, 7));
$i = 0;
while (isset($A[$i])) {
    $j = 0;
    $min = findMinMaxAndIndices($A[$i])[0];
    $minndx = findMinMaxAndIndices($A[$i])[1];
    $max = findMinMaxAndIndices($A[$i])[2];
    $maxndx = findMinMaxAndIndices($A[$i])[3];
    $A[$i][$minndx] = $max;
    $A[$i][$maxndx] = $min;
    $i++;
}
print_r($A);