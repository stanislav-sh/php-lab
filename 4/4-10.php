<?php
function count_arr($x)
{
    $count = 0;
    while (isset($x[$count])) {
        $count++;
    }
    return $count;
}
function delete_from_array($A,$index){
    while($index < count_arr($A)-1){
        $A[$index] = $A[$index+1];
        $index++;
    }
    unset($A[$index]);
    return $A;
}
function findMax($x)
{
    $i = 0;
    $max = $x[0];
    while (isset($x[$i])) {
        if ($x[$i] > $max) {
            $max = $x[$i];
        }
        $i++;
    }
    return $max;
}
$A = Array(
    Array(3, -2, -3,3),
    Array(-27, -81, 8310,1),
    Array(8320,81, -1, 8320));
$i = 0;
while (isset($A[$i])) {
    $j = 0;
    $max = findMax($A[$i]);
    while (isset($A[$i][$j])) {
        if ($A[$i][$j] == $max) {
            $A[$i] = delete_from_array($A[$i],$j);
            $j--;
        }
        $j++;
    }
    $i++;
}
print_r($A);