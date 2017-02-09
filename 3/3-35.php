<?php
$arr = Array(0, 0, 1, 1, 2, 2, 0, 1, 2,2, 1,0);
$size = count($arr);
for ($i = $size -1; $i >=0 ; $i--) {
    for ($j = $size - 2 - $i; $j >= 0; $j--) {
        if ($arr[$j + 1] == 2) {
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