<?php
$A = Array(1,1,14, -54, 67, 12, 0, 34, 5, -27, 54,54,3,3, 3);
$i = 1;
if(!isset($A[$i])){
    echo 'Array is too small';
    exit;
}
$count = 0;
while (isset($A[$i])) {
    if ($A[$i] == $A[$i-1]) {
        $count++;
    }
    $i++;
}
echo $count;