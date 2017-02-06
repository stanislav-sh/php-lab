<?php
$n = 1;

for($i = 1000; $i < 10000; $i++){
    $iCurrent = $i;
    $sum = 0;
    while($iCurrent != 0){
        $sum += $iCurrent % 10;
        $iCurrent = (int)($iCurrent / 10);
    }
    if($sum == $n){
        echo $i.' ';
    }
}