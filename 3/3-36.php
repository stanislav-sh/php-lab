<?php
$arr = Array(1, 0, 10, 31, 21, 42, 2, -1, 15, -40, 0, 1, 2, 2, 1, 0, -1);
$size = count($arr);
for ($i = $size - 1; $i >= 0; $i--) {
    for ($j = $size - 2 - $i; $j >= 0; $j--) {
        if ($arr[$j] > 0) {
            $tmp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $tmp;
        }
    }
}
$k = 0;
while ($arr[$k] <= 0) {
    $k++;
}

for ($i = $k; $i < $size; $i++) {
    for ($j = $k; $j < $size - 1; $j++) {
        if ($arr[$j + 1] > $arr[$j]) {
            $tmp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $tmp;
        }
    }
}

print_r($arr);