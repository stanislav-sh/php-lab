<?php
$A = Array(1,1, 14, -54, 67, 12, 0, 34, 5,5,0, -27,0, 54, 3,0);
$B = Array($A[0]);
$i = 0;
$count = 0;
while(isset($A[$i])) {
    $j = 0;
    if(!isset($B[$A[$i]])){
        $B[$A[$i]] = 0;
    }
    $B[$A[$i]]++;
    if($B[$A[$i]] == 2){
        $count++;
    }
    $i++;
}
echo $count;
