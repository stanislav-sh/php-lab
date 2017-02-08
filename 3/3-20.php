<?php
$A = Array(1,1, 14, -54, 67, 12, 0, 34, 5,5,0, -27,0, 54, 3,3);
$B = Array();
$i = 0;

while(isset($A[$i])){
    $j = $i+1;
    while(isset($A[$j])){
        if($A[$i] == $A[$j]){
            $j++;
            $B[$A[$i]] = 0;
            continue;
        }
        $j++;
    }
    if(!isset($B[$A[$i]])){
        echo $A[$i].' ';
    }

    $i++;
}