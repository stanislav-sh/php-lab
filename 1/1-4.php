<?php
$n = 1;
for ($i = 1000; $i < 10000; $i++) {
    $iCurrent = $i;

    $prevNumber = 10;
    $nextNumber = 0;

    $up = true;
    $down = true;

    while ($iCurrent != 0) {
        $number = $iCurrent % 10;
        if($prevNumber < $number){
            $up = false;
        }
        if($nextNumber > $number){
            $down = false;
        }
        $iCurrent = (int)($iCurrent / 10);
        $prevNumber = $nextNumber = $number;

    }
    if($up && $down){
        echo $i.' - Both<br>';
    }
    else if($up){
        echo $i.' - Up<br>';
    }
    else if($down){
        echo $i.' - Down<br>';
    }
}