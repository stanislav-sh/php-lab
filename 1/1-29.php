<?php

function sum_of_numbers($x){
    $sum = 0;
    $i = 0;
    while(isset($x[$i])){
        $sum += $x[$i];
        $i++;
    }
    return $sum;
}

function test($x,$index,$k){
    $i = 0;
    if(sum_of_numbers($x) == $k){
        echo "Found";
        exit;
    }
    while(isset($x[$i])){
        $j = 0;
        $j1 = 0;
        $xCur = array();
        while(isset($x[$j + 1])){
            if ($j == $index) {
                $j1++;
            }
            $xCur[$j] = $x[$j1];
            $j++;
            $j1++;
        }
        test($xCur,$i,$k);
        $i++;
    }
}

$N = 125134;
$k = 11;
$numbers = Array();
$i = 0;
while ($N != 0) {
    $number = $N % 10;
    $N = (int)($N / 10);
    $numbers[$i] = $number;
    $i++;
}
for($j = 0; $j < $i; $j++){
    test($numbers,$j,$k);
}


echo 'Not found';