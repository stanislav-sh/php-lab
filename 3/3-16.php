<?php
$A = Array(1, 1, 1, 14, -54, 67, 12, 12, 12, 12, 0, 34, 5, -27, 54, 3);
$maxlen = 0;
$i = 0;
while (isset($A[$i])) {
    $len = 1;
    while (isset($A[$i + 1])) {
        if ($A[$i] == $A[$i + 1]) {
            $len++;
            $i++;
        } else {
            break;
        }
    }
    if ($len > $maxlen) {
        $maxlen = $len;
    }
    $i++;
}
echo $maxlen;