<?php
function insert_into_array($A, $index, $x)
{
    for ($i = count_arr($A) - 1; $i >= $index; $i--) {
        $A[$i + 1] = $A[$i];
    }
    $A[$index] = $x;
    return $A;
}
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
$A = Array(
    Array(3, 2, -4, 3),
    Array(-27, -81, 8310, 1),
    Array(8320, -2, 2, 8320),
    Array(10, 2, 10, 10));
print_r(insert_into_array($A[0], 4,0));