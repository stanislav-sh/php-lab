<?php
$A = Array(1, 4, -2, 2, 0, -3, 4, 4);
$i = 0;
while (isset($A[$i])) {
    if($A[$i] % 2 == 0 && !isset($max)){
        $max = $A[$i];
    }
    if(isset($max)){
        if($A[$i] > $max && $A[$i] % 2 == 0){
            $max = $A[$i];
        }
    }
    $i++;
}
$i = 0;
if(!isset($max)){
    echo "No even elements found";
    exit;
}
while (isset($A[$i])) {
    if($A[$i] == $max){
        $A[$i] = $i;
    }
    $i++;
}
print_r($A);