<?php
$A = Array(1, 14, 33, 67, 12, 0, 34, 5, -27, -4, 3);
$i = 0;
$max = $A[$i];
$min = $A[$i];
while (isset($A[$i])) {
    if ($A[$i] < $min) {
        $min = $A[$i];
    }
    if ($A[$i] > $max) {
        $max = $A[$i];
    }
    $i++;
}
$i--;
while (isset($A[$i - 1])) {
    if ($A[$i] > 0 && $A[$i - 1] == $min) {
        $posAfterMin = $A[$i];
        break;
    }
    $i--;
}
$i = 0;

while (isset($A[$i + 1])) {
    if ($A[$i] < 0 && $A[$i + 1] == $max) {
        $negBeforeMax = $A[$i];
        break;
    }
    $i++;
}

echo isset($negBeforeMax) ? $negBeforeMax . '<br>' : 'Negative number before max not found<br>';
echo isset($posAfterMin) ? $posAfterMin . '<br>' : 'Positive number after min not found';