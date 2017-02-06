<?php
for ($i = 1000; $i < 10000; $i++) {
    $arr = array();
    $isRight = true;
    for ($j = 0; $j < 10; $j++) {
        $arr[$j] = 0;
    }
    $n = $i;
    while ($n != 0) {
        $number = $n % 10;
        $arr[$number] += 1;
        if ($arr[$number] > 1) {
            $isRight = false;
            break;
        }
        $n = (int)($n / 10);
    }
    if ($isRight) {
        echo $i . '<br>';
    }
}