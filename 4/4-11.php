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

function find_ndx_max($x)
{
    $i = 0;
    $max = $x[0];
    $maxndx = 0;
    while (isset($x[$i])) {
        if ($x[$i] >= $max) {
            $max = $x[$i];
            $maxndx = $i;
        }
        $i++;
    }
    return $maxndx;
}

function find_ndx_first_equal($x, $element)
{
    $i = 0;
    while (isset($x[$i])) {
        if ($x[$i] == $element) {
            return $i;
        }
        $i++;
    }
}

$A = Array(
    Array(3, 2, -4, 3),
    Array(-27, -81, 8310, 1),
    Array(8320, -2, 2, 8320),
    Array(10, 2, 10, 10));
for ($i = 0; $i < count_arr($A); $i++) {
    $maxndx1 = find_ndx_max($A[$i]);
    $maxndx2 = find_ndx_first_equal($A[$i], $A[$i][$maxndx1]);
    for ($j = $maxndx1 - 1; $j > $maxndx2; $j--) {
        if ($A[$i][$j] % 2 == 0 && $A[$i][$j] > 0) {
            $A[$i] = delete_from_array($A[$i], $j);
        }
    }
}
print_r($A);