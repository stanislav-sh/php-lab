<?php
$A = Array(1, 14, 54, -67, -12, 0, 34, 5, 27, 54, 3);
$i = 0;
while (isset($A[$i])) {
    if (!isset($min) && $A[$i] < 0) {
        $min = $A[$i];
    }
    if (!isset($max) && $A[$i] > 0) {
        $max = $A[$i];
    }
    if (isset($min) && $A[$i] < $min && $A[$i] > 0) {
        $min = $A[$i];
    }
    if (isset($max) && $A[$i] > $max && $A[$i] < 0) {
        $max = $A[$i];
    }
    $i++;
}

echo isset($max) ? 'Min positive: ' . $max . '<br>' : 'Min positive not found<br>';
echo isset($min) ? 'Max negative:' . $min : 'Min positive not found';