<?php
$arr = Array(0, 0, 1, 1, 2, 2,-1,15,-40, 0, 1, 2,2, 1,0);
$size = count($arr);
for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size - 1 - $i; $j++) {
        if ($arr[$j + 1] < $arr[$j]) {
            $tmp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $tmp;
        }
    }
}

for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size - 1 - $i; $j++) {
        if ($arr[$j + 1] == 0) {
            $tmp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $tmp;
        }
    }
}

print_r($arr);