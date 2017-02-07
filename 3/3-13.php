<?php
$A = Array(1, 14, -54, 67, 12, 0, 34, 5, -27, 54, 3);
$i = 0;
$max = $A[$i];
$min = $A[$i];
$max2 = $A[$i];
$min2 = $A[$i];
while (isset($A[$i])) {
    if ($A[$i] < $min) {
        $min = $A[$i];
    }
    if($A[$i] > $max){
        $max = $A[$i];
    }
    $i++;
}
$i = 0;
$max2 = $A[$i];
$min2 = $A[$i];
while (isset($A[$i])) {
    if ($A[$i] < $min2 && $A[$i]!=$min) {
        $min2 = $A[$i];
    }
    if($A[$i] > $max2 && $A[$i]!=$max){
        $max2 = $A[$i];
    }
    $i++;
}

echo 'Min: '.$min.' '.$min2.'<br>';
echo 'Max: '.$max.' '.$max2.'<br>';
