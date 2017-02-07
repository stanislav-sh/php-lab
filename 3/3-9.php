<?php
$A = Array(1, 14, -54, 62, 12, 0, 34, 2, -21, 54, 2);
$i = 0;
$max = false;
$min = false;
while (isset($A[$i])) {
    if ($A[$i] % 2 == 0 && !is_numeric($max)) {
        $max = $A[$i];
    }
    if ($A[$i] % 2 == 0 && is_numeric($max)) {
        if ($A[$i] > $max) {
            $max = $A[$i];
        }
    }
    if (($A[$i] % 2 == 1 || $A[$i] % 2 == -1) && !is_numeric($min)) {
        $min = $A[$i];
    }
    if (($A[$i] % 2 == 1 || $A[$i] % 2 == -1) && is_numeric($min)) {
        if ($A[$i] < $min ) {
            $min = $A[$i];
        }
    }
    $i++;
}
echo (is_numeric($min)) ? 'Min odd:'.$min.'<br>' :  'No odd numbers<br>';
echo (is_numeric($max)) ? 'Max even:'.$max.'<br>' :  'No even numbers<br>';