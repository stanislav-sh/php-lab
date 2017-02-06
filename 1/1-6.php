<?php
$n = 1;
for ($i = 1000; $i < 10000; $i++) {
    $iCurrent = $i;
    $isRight = true;
    while ($iCurrent != 0) {
        $number = $iCurrent % 10;
        if ($number != 0 && $number != 2 && $number != 3 && $number != 7) {
            $isRight = false;
            break;
        }
        $iCurrent = (int)($iCurrent / 10);

    }
    if($isRight){
        echo $i.' ';
    }


}