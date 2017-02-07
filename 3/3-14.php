<?php
$A = Array(1, 14, -54, 67, 12, 0, 34, 5, -27, 54, 3);
$Neg = Array();
$Pos = Array();
$Odd = Array();
$Even = Array();
$NegNdx = 0;
$PosNdx = 0;
$OddNdx = 0;
$EvenNdx = 0;
$i = 0;
while (isset($A[$i])) {
    if ($A[$i] < 0) {
        $Neg[$NegNdx] = $A[$i];
        $NegNdx++;
    }
    if ($A[$i] > 0) {
        $Pos[$PosNdx] = $A[$i];
        $PosNdx++;
    }
    if ($A[$i] % 2 == 0) {
        $Odd[$OddNdx] = $A[$i];
        $OddNdx++;
    }
    if ($A[$i] % 2 == 1 || $A[$i] % 2 == -1 ) {
        $Even[$EvenNdx] = $A[$i];
        $EvenNdx++;
    }
    $i++;
}
echo 'Negative:';
print_r($Neg);
echo '<br>Positive:';
print_r($Pos);
echo '<br>Odd:';
print_r($Odd);
echo '<br>Even:';
print_r($Even);