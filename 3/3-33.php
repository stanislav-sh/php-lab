<?php
function insert_into_array($A,$index,$x){
    for ($i = count_arr($A) - 1; $i >= $index; $i--){
        $A[$i+1] = $A[$i];
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
function arrsort($arr,$mode) {
    $size = count($arr);
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-1-$i; $j++) {
            if($mode == 0){
                if ($arr[$j+1] < $arr[$j]) {
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $tmp;
                }
            }
            if($mode == 1){
                if ($arr[$j+1] > $arr[$j]) {
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $tmp;
                }
            }

        }
    }
    return $arr;
}
function arrmerge($A,$B){
    $i = count_arr($A);
    $j = 0;
    while(isset($B[$j])){
        $A[$i] = $B[$j];
        $j++;
        $i++;
    }
    return $A;

}
$A = Array(2, 14, -54, 67, 12, 0, 34, 5, -27, 54, 3);
$p = 4;
$B = Array();
$C = Array();

$i = 0;
$positiveNdx = 0;
$otherNdx = 0;
while (isset($A[$i])) {
    if($A[$i] > 0) {
        $B[$positiveNdx] = $A[$i];
        $positiveNdx++;
    }
    else {
        $C[$otherNdx] = $A[$i];
        $otherNdx++;
    }
    $i++;
}
$B = arrsort($B,0);
$A = arrmerge($B,$C);
$i = 0;
while(isset($A[$i])){
    if($A[$i]<=0){
        $A = insert_into_array($A,$i,$p);
        break;
    }
    if($p<=$A[$i]){
        $A = insert_into_array($A,$i,$p);
        break;
    }
    $i++;
}
print_r($A);