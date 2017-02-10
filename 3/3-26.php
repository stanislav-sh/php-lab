<?php
function count_arr($x)
{
    $count = 0;
    while (isset($x[$count])) {
        $count++;
    }
    return $count;
}

$A = Array(1, 14, -54, 67, 12, 0, 34, 5, -27, -54, 3);
$i = 0;
$max = $A[$i];
while (isset($A[$i])) {
    if ($A[$i] > $max) {
        $max = $A[$i];
    }
    $i++;
}
$B = Array();
$j = 0;
$i = 0;
for ($i = 0; $i < count_arr($A); $i++) {
    $B[$j] = $A[$i];
    if ($A[$i] % 2 == 0 && $A[$i] < 0) {
        $j++;
        $B[$j] = $max;
    }
    $j++;
}
print_r($B);