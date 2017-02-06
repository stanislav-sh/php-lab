<?php
$N = 20135921;
$count = 0;
while ($N != 0) {
    $number = $N % 10;
    if ($number < 5) {
        $count++;
    }
    $N = (int)($N / 10);
}
echo $count;