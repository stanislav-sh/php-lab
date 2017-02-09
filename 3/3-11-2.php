<?php
$A = Array(-3, 1, -14, 33, 67, 12, 0, 34, 5, -27, 2, -4, 3);
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

while (isset($A[$i])) {
    if ($A[$i] == $min) {
        $minFound = true;
    }
    if (!isset($minFound) && !isset($posAfterMin) && $A[$i] > 0) {
        $posAfterMin = $A[$i];
    }
    if (isset($maxFound) && !isset($negBeforeMax) && $A[$i] < 0) {
        $negBeforeMax = $A[$i];
    }
    if ($A[$i] == $max) {
        $maxFound = true;
    }
    $i--;
}

echo isset($negBeforeMax) ? $negBeforeMax . '<br>' : 'Negative number before max not found<br>';
echo isset($posAfterMin) ? $posAfterMin . '<br>' : 'Positive number after min not found';