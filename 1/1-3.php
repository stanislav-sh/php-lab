<?php
$N = 1234454;
$prevNumber = 10;
while ($N != 0) {
    $number = $N % 10;
    if ($prevNumber < $number) {
        echo "False";
        exit;
    }
    $N = (int)($N / 10);
    $prevNumber = $number;
}
echo "True";