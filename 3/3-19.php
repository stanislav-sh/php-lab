<?php
$A = Array(1, 1, 14, -54, 67, 12, 0, 34, 5, 5, 0, -27, 0, 54, 3, 0);
$B = Array($A[0]);
$i = 0;
$p = 3;
$lastindex = false;
while (isset($A[$i])) {
    if ($A[$i] % 2 == 0 && $A[$i] > 0 && $A[$i] % $p == 0) {
        $lastindex = $i;
    }
    $i++;
}
$i--;
if ($lastindex == false) {
    echo 'No such elements found';
} else {
    $A[$lastindex] = $lastindex;
    $temp = $A[$i];
    $A[$i] = $A[$lastindex];
    $A[$lastindex] = $temp;
}
print_r($A);