<?php
function delete_from_array($A,$index){
    while($index < count_arr($A)-1){
        $A[$index] = $A[$index+1];
        $index++;
    }
    unset($A[$index]);
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

function power($x, $pow)
{
    if($pow == 0){
        return 1;
    }
    $xOrig = $x;
    while ($pow > 1) {
        $x = $x * $xOrig;
        $pow--;
    }
    return $x;
}

$A = Array(3, 1, 2, 3, 1);
$B = Array();
$x = 3;

while (count_arr($A) != 0) {
    $sum = 0;
    $count = count_arr($A);
    for ($i = 0; $i < $count; $i++) {
        $sum += $A[$i] * power($x, $i);
    }
    for ($i = 0; $i < $count; $i++) {
        $temp = $i * $A[$i];
        $A[$i] = $temp;
    }
    $A = delete_from_array($A,0);

    echo 'Answer for '.$count.' degree: ' . $sum.'<br>';
}
