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
$A = Array(1, 14,28);
print_r(delete_from_array($A,2));