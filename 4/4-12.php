<?php
function insert_into_array($A, $index, $x)
{
    for ($i = count_arr($A) - 1; $i >= $index; $i--) {
        $A[$i + 1] = $A[$i];
    }
    $A[$index] = $x;
    return $A;
}
function transpose($a){
    $b = Array();
    for($i=0; $i<count_arr($a); $i++)
     {
         for($j=0; $j<count_arr($a[$i]); $j++)
              {
                  $b[$j][$i] = $a[$i][$j];
              }
     }
    return $b;
}


function count_arr($x)
{
    $count = 0;
    while (isset($x[$count])) {
        $count++;
    }
    return $count;
}
function find_min($x)
{
    $i = 0;
    $min = $x[0];
    while (isset($x[$i])) {
        if ($x[$i] < $min) {
            $min = $x[$i];
        }
        $i++;
    }
    return $min;
}
function find_ndx_negative($x){
    $i = 0;
    while (isset($x[$i])) {
        if ($x[$i] < 0) {
            return $i;
        }
        $i++;
    }
    return 0;
}
$A = Array(
    Array(3, 2, -4, 3),
    Array(-27, -81, 8310, 1),
    Array(8320, -2, 2, 8320),
    Array(10, 2, 10, 10));
print_r($A);
$A = transpose($A);
$count = count_arr($A);
for($i = 0; $i < $count;$i++){
    $min = find_min($A[$i]);
    $ndx = find_ndx_negative($A[$i]);
    echo $i.' '.$min.' '.$ndx.'<br>';
    $A[$i] = insert_into_array($A[$i],$ndx,$min);
}
$A = transpose($A);
print_r($A);