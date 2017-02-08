<?php
$A = Array(1, 14, -54, 67, 12, 0, 34, 5,0, -27,0, 54, 3,0);
$B = Array($A[0]);
$i = 1;
while(isset($A[$i])) {
    $j = 0;
    while(isset($B[$j])){
        if($A[$i] == $B[$j])
            break;
            $j++;
    }
}
