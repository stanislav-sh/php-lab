<?php
function count_arr($x)
{
    $count = 0;
    while (isset($x[$count])) {
        $count++;
    }
    return $count;
}

function delete_from_array($A, $index)
{
    while ($index < count_arr($A) - 1) {
        $A[$index] = $A[$index + 1];
        $index++;
    }
    unset($A[$index]);
    return $A;
}

$A = Array(1, 14, -54, 67, -300, 0, 34, 5, -27, 54, 300);
$i = 0;
$max = $A[$i];
$min = $A[$i];
while (isset($A[$i])) {
    if ($A[$i] < $min) {
        $min = $A[$i];
    }
    if ($A[$i] > $max) {
        $max = $A[$i];
    }
    $i++;
}
$i = 0;
while (isset($A[$i])) {
    if ($A[$i] == $min) {
        $minndx = $i;
        break;
    }
    $i++;
}
$i = 0;
while (isset($A[$i])) {
    if ($A[$i] == $max) {
        $maxndx = $i;
    }
    $i++;
}
if ($minndx > $maxndx) {
    $temp = $minndx;
    $minndx = $maxndx;
    $maxndx = $temp;
}

for ($i = $maxndx - 1; $i > $minndx; $i--) {
    $A = delete_from_array($A, $i);
}
print_r($A);