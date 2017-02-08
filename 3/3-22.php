<?php
$A = Array(1, 1, -105, -54, -112, 12, 0, -105, 5, 5, 0, -27, -112, 54, 3, 3);
$B = Array();
$i = 0;
while (isset($A[$i])) {
    $j = $i + 1;
    while (isset($A[$j])) {
        if ($A[$i] == $A[$j]) {
            $j++;
            $B[$A[$i]] = 0;
            continue;
        }
        if (!isset($min)) {
            $min = $A[$i];
        }
        $j++;
    }
    if (!isset($B[$A[$i]]) && isset($min)) {
        if ($A[$i] < $min)
            $min = $A[$i];
    }

    $i++;
}
echo isset($min) ? $min : "No such variable found";