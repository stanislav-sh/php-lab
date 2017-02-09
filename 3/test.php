<?php
function count_arr($x)
{
    $count = 0;
    while (isset($x[$count])) {
        $count++;
    }
    return $count;
}

function insert_into_array($A, $index, $x)
{
    for ($i = count_arr($x) - 1; $i >= $index - 1; $i--) {
        $A[$i + 1] = $A[$i];
    }
    $A[$index - 1] = $x;
    return $A;
}

$A = Array(1, 2, 3, 4, 5, 6, 7, 8, 9);
print_r(insert_into_array($A, 1, 100));