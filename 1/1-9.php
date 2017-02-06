<?php
$N = 26;
$NOrig = $N;
$NSquare = $N * $N;
$count = 0;
while ($N != 0) {
    $number = $N % 10;
    $count++;
    $N = (int)($N / 10);
}
$lastDigits = 0;
$ten = 1;
for ($i = 0; $i < $count; $i++) {
    $ten *= 10;
}
$lastDigits += $NSquare % $ten;
if ($lastDigits == $NOrig) {
    echo 'True';
} else {
    echo 'False';
}