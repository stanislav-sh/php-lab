<?php
$A = Array(100, 14, 54, -67, -12, 0, 34, -5, 27, 54, 3);
$i = 0;
while (isset($A[$i])) {
    if (!isset($max) && $A[$i] < 0) {
        $max = $A[$i];
    }
    if (!isset($min) && $A[$i] > 0) {
        $min = $A[$i];
    }
    if (isset($max) && $A[$i] > $max && $A[$i] < 0) {
        $max = $A[$i];
    }
    if (isset($min) && $A[$i] < $min && $A[$i] > 0) {
        $min = $A[$i];
    }
    $i++;
}

echo isset($min) ? 'Min positive: ' . $min . '<br>' : 'Min positive not found<br>';
echo isset($max) ? 'Max negative:' . $max : 'Max negative not found';