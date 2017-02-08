<?php
function count_arr($x)
{
    $count = 0;
    while (isset($x[$count])) {
        $count++;
    }
    return $count;
}
function insert_into_array($A,$index,$x){
    for ($i = count_arr($A) - 1; $i >= $index; $i--){
        $A[$i+1] = $A[$i];
    }
    $A[$index] = $x;
    return $A;
}

$A = Array(1, 2, 3, 5, 6);
$k = 3;
$B = Array(0,1, 4, 4, 8);
$i = 0;
while ($i <= $k) {
    $j = 0;
    while (isset($A[$j])) {
        if ($B[$i] <= $A[$j]) {
           $A = insert_into_array($A, $j,$B[$i]);
            $i++;
            continue 2;
        }
        $j++;
    }
    $A = insert_into_array($A, $j,$B[$i]);
    $i++;
}
print_r($A);