<?php
$n = 221854573;
$arr = array();
$count = 0;
for ($i = 0; $i < 10; $i++) {
    $arr[$i] = 0;
}
while ($n != 0) {
    $number = $n % 10;
    $arr[$number] += 1;
    $n = (int)($n / 10);
    $count++;
}
$number = 0;
for($i = 0 ; $i < 10; $i++){
    for($j = 0; $j < $arr[$i];){
        $number = $number * 10 + $i;
        $count--;
        $arr[$i]--;
    }
}
echo $number;