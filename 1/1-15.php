<?php
$n = 1037;
$count = 0;
for ($i = 1; $i <= $n / 2; $i++) {
    if ($n % $i == 0) {
        $count++;
        echo $i . ' ';
    }
}
echo $count;