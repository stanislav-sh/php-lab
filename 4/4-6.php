<?php
function count_arr($x)
{
    $count = 0;
    while (isset($x[$count])) {
        $count++;
    }
    return $count;
}
function rowContainsNegative($x){
    $contains = false;
    $j = 0;
    while (isset($x[$j])) {
        if ($x[$j] < 0) {
            $contains = true;
        }
        $j++;
    }
    return $contains;
}

function multiplyArrayByVector($arr,$vec){
   $arrResult = Array();
    $len = count_arr($vec);
    for ($i = 0; $i < $len; $i++)
    {
        $arrResult[$i] = 0;
        for ($j = 0; $j < $len; $j++)
            $arrResult[$i] += $arr[$i][$j] * $vec[$j];
    }
    return $arrResult;
}

$A = Array(
    Array(1, -2, 3),
    Array(4, -2, 16),
    Array(9, 8, 7));
$i = 0;
$sumMain = 0;
$sumAbove = 0;
$sumBelow = 0;
while (isset($A[$i])) {
    $j = 0;
    $sum = 0;
    if (!rowContainsNegative($A[$i])) {
        print_r(multiplyArrayByVector($A,$A[$i]));
        exit;
    }
    $i++;
}

echo 'No such rows found';