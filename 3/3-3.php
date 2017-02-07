<?php
$A = Array(1,1, 14, -54, 67,67, 12, 0, 34, 5, -27, 54, 3,3);
$i = 1;
$count = 0;
while (isset($A[$i])) {
    if ($A[$i] == $A[$i-1]) {
        $count++;
    }
    $i++;
}
echo $count;