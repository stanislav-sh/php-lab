<?php
$A = Array(
    Array(1, 2, 3, 3),
    Array(4, 81, 8310, 3),
    Array(0, 1, 8320, 3));
$i = 0;
$sum = 0;
while (isset($A[$i])) {
    $j = 0;
    while (isset($A[$i][$j])) {
        $iCurrent = $A[$i][$j];
        $isRight = true;
        while ($iCurrent != 0) {
            $number = $iCurrent % 10;
            if ($number != 0 && $number != 1 && $number != 3 && $number != 8) {
                $isRight = false;
                break;
            }
            $iCurrent = (int)($iCurrent / 10);

        }
        if ($isRight) {
            $sum += $A[$i][$j];
        }
        $j++;
    }
    $i++;
}
echo 'Sum:' . $sum;