<?php
function rowAscOrDes($x)
{
    $j = 0;
    while (isset($x[$j + 1])) {
        if ($x[$j] < $x[$j + 1]) {
            $notAsc = true;
        }
        if ($x[$j] > $x[$j + 1]) {
            $notDes = true;
        }
        $j++;
    }
    return (isset($notAsc) && isset($notDes)) ? false : true;
}

function findMinAndMax($x)
{
    $i = 0;
    $min = $x[0];
    $max = $x[0];
    while (isset($x[$i])) {
        if ($x[$i] < $min) {
            $min = $x[$i];
        }
        if ($x[$i] > $max) {
            $max = $x[$i];
        }
        $i++;
    }
    return Array($min,$max);
}

$A = Array(
    Array(1, 2, 3),
    Array(4, -2, 16),
    Array(9, 8, 7));
$i = 0;
$sumMain = 0;
$sumAbove = 0;
$sumBelow = 0;
while (isset($A[$i])) {
    $j = 0;
    $sum = 0;
    if (rowAscOrDes($A[$i])) {
        if (!isset($min) && !isset($max)) {
            $min = findMinAndMax($A[$i])[0];
            $max = findMinAndMax($A[$i])[1];
        }
        else{
            if(findMinAndMax($A[$i])[0] < $min){
                $min = findMinAndMax($A[$i])[0];
            }
            if(findMinAndMax($A[$i])[1] > $max){
                $max = findMinAndMax($A[$i])[1];
            }
        }
    }
    $i++;
}

echo (isset($min) && isset($max)) ?'min: ' . $min . ' max: ' . $max : 'No such rows found';