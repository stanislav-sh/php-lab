<?php
$n = 221;
$arr = array();
for ($i = 0; $i < 10; $i++) {
    $arr[$i] = 0;
}
while ($n != 0) {
    $number = $n % 10;
    $arr[$number] += 1;
    if ($arr[$number] > 1) {
        echo "True";
        exit;
    }
    $n = (int)($n / 10);
}
echo "False";