<?php
$N = 20135921;
$M = 0;
while ($N != 0) {
    $number = $N % 10;
    $M = $M * 10 + $number;
    $N = (int)($N / 10);
}
echo $M;