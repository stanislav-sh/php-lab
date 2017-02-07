<?php
function factorial($x){
    return $x == 1 ? $x : $x * factorial($x-1);
}
$m = 100000;
echo "Numbers: ";
$numSum = 0;
$number = 0;
for($i = 1; $i < $m; $i++){
    $iCurrent = $i;
    $sum = 0;
    while ($iCurrent != 0) {
        if($iCurrent % 10 != 0){
            $sum += factorial($iCurrent % 10);
        }
        $iCurrent = (int)($iCurrent / 10);
    }
    if($sum == $i){
        $number++;
        $numSum += $sum;
        echo $i.' ';
    }
}
echo"<br>Sum: ".$numSum;
echo"<br>Number: ".$number;