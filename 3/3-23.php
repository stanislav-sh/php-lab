<?php
$A = Array(1, -991, 14, -54, 67, 12, 0, 34, 5, 5, 0, -27, 0, -54, -103, 3);
$B = Array();
$C = Array();
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
    if (isset($B[$A[$i]]) && !isset($C[$A[$i]])) {
        $C[$A[$i]] = 0;
        if (isset($min)) {
            if ($A[$i] < $min) {
                $min = $A[$i];
            }

        }

    }
    $i++;
}
echo isset($min) ? $min : "No such variable found";