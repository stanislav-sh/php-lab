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

function digitsSum($N)
{
    $count = 0;
    while ($N != 0) {
        $count++;
        $N = (int)($N / 10);
    }
   return $count;
}

$A = Array(1, 14, -54, 67, 12, 0, 34, 5, -27, 54, 3);
$i = 0;
$k = 2;
$max = $A[$i];
while (isset($A[$i])) {
    if($A[$i] > $max){
        $max = $A[$i];
    }
    $i++;
}
$i=0;
print_r($A);
while (isset($A[$i])) {
    $B[$i] = $A[$i];
    if ($A[$i] == $max) {
        $j = $i + 1;
        $jOrig = $j;
        while (isset($A[$j])) {
            if(digitsSum($A[$j])==$k){
                $A = delete_from_array($A, $j);
                $j--;
            }
        $j++;
        }
        break;
    }
    $i++;
}
echo '<br>';
print_r($A);