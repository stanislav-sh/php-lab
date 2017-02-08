<?php
$A = Array(1, 14, -54, 67, 12, 0, 34, 5, -27, 54, 3);
$k = 3;
$n = 39;
$i = 0;
while (isset($A[$i + $k])) {
    $sum = 0;
    for ($j = $i; $j < $i + $k; $j++) {
        $sum += $A[$j];
    }
    if ($sum == $n) {
        echo "Sequence starting from index " . $i;
        exit;
    }
    $i++;
}
echo "There is no such sequence";