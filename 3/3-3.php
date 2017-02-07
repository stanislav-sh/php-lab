<?php
$A = Array(1, 14, -54, 67, 12, 0, 34, 5, -27, 54, 3);
$negndx = false;
$posndx = 0;
while ($A[$posndx] <= 0) {
    $posndx++;
    if (!isset($A[$posndx])) {
        echo 'No positives';
        exit;
    }
}
$i = 0;
while (isset($A[$i])) {
    if ($A[$i] < 0) {
        $negndx = $i;
    }
    $i++;
}

if (!is_numeric($negndx)) {
    echo 'No negatives';
    exit;
}
$temp = $A[$posndx];
$A[$posndx] = $A[$negndx];
$A[$negndx] = $temp;
print_r($A);