<?php
function floatrem( $a)
{
    if($a < 0){
        return floatrem(-$a);
    }
    while($a >= 1 && $a != 0){
        $a = $a - 1;
    }
    return $a;
}
$A = Array(1, 14, -54, 67.2, 12, 0, -34.1, 5.5, -27, 54, 3);
$NegPos = Array();
$OddEven = Array();
$NegPosNdx = 0;
$OddEvenNdx = 0;
$i = 0;
while (isset($A[$i])) {
    if ($A[$i] < 0 || $A[$i] > 0) {
        $NegPos[$NegPosNdx] = $A[$i];
        $NegPosNdx++;
    }
    if (floatrem($A[$i]) == 0) {
        $OddEven[$OddEvenNdx] = $A[$i];
        $OddEvenNdx++;
    }
    $i++;
}
echo 'Negative and positive:';
print_r($NegPos);
echo '<br>Odd and even:';
print_r($OddEven);