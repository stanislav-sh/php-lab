<?php
$n = 2213;
for ($j = 1; $j < $n; $j++) {

    $jCurrent = $j;
    $arr = array();
    $count = 0;
    for ($i = 0; $i < 10; $i++) {
        $arr[$i] = 0;
    }
    while ($jCurrent != 0) {
        $number = $jCurrent % 10;
        $arr[$number] += 1;
        $jCurrent = (int)($jCurrent / 10);
        $count++;
    }
    $number = 0;
    for ($i = 9; $i >= 0; $i--) {
        while ($arr[$i] > 0) {
            $number = $number * 10 + $i;
            $count--;
            $arr[$i]--;
        }
    }
    echo 'Original: ' . $j . ' Max:' . $number . '<br>';
}