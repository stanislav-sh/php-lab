<?php
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
$A = Array(1, 14, -54, 67, 12, 0, 34, 5, -27, 54, 3);
$B = Array();
$C = Array();
$i = 0;
$evenNdx = 0;
$oddNdx = 0;
while (isset($A[$i])) {
    if($A[$i] % 2 == 0) {
        $B[$evenNdx] = $A[$i];
        $evenNdx++;
    }
    else if($A[$i] % 2 == 1 || $A[$i] % 2 == -1) {
        $C[$oddNdx] = $A[$i];
        $oddNdx++;
    }
    $i++;
}
$B = arrsort($B,0);
$C = arrsort($C,1);
$A = arrmerge($B,$C);
print_r($A);