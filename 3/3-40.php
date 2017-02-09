<?php
function count_arr($x)
{
    $count = 0;
    while (isset($x[$count])) {
        $count++;
    }
    return $count;
}

$A = Array(1, 2, 4, 9, 12, 24, 56);
$B = Array(-12, 0, 2, 6, 90);
$C = Array();
$i = 0;
$j = 0;
$ALen = count_arr($A);
$BLen = count_arr($B);
$index = 0;
while ($i < $ALen && $j < $BLen) {
    if ($A[$i] < $B[$j]) {
        $C[$index] = $A[$i];
        $i++;
    } else {
        $C[$index] = $B[$j];
        $j++;
    }

    $index++;
}

while ($i < $ALen) {
    $C[$index] = $A[$i];
    $index++;
    $i++;
}

while ($j < $BLen) {
    $C[$index] = $B[$j];
    $index++;
    $j++;
}

print_r($C);