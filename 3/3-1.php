<?php
$A = Array(1, 14, -54, 67, 12, 0, 34, 5, -27, 54, 3);
$i = 0;
$count = 0;
$sum = 'No negatives';
    while ($A[$i] >= 0) {
        $count++;
        $i++;
        if(!isset($A[$i])){
            $count = 'No negatives';
            break;
        }
    }

while (isset($A[$i])) {
    if ($A[$i] <= 0) {
        $sum = 0;
    } else {
        $sum += $A[$i];
    }
    $i++;
}
echo "Count before first negative:" . $count . '<br>';
echo "Sum after last negative:" . $sum;