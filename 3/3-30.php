<?php
function count_arr($x)
{
    $count = 0;
    while (isset($x[$count])) {
        $count++;
    }
    return $count;
}

function power($x, $pow)
{
    if ($pow == 0) {
        return 1;
    }
    $xOrig = $x;
    while ($pow > 1) {
        $x = $x * $xOrig;
        $pow--;
    }
    return $x;
}

$A = Array(3, 1, 2, 3, 1);
$B = Array();
$x = 3;
$sum = 0;
$sumDer = 0;
$count = count_arr($A);

for ($i = 0; $i < $count; $i++) {
    $sum += $A[$i] * power($x, $i);
}
for ($i = 0; $i < $count; $i++) {
    $B[$i] = $i * $A[$i];
}
for ($i = 0; $i < $count; $i++) {
    $sumDer += $B[$i] * power($x, $i - 1);
}
echo 'Initial: ' . $sum . ' Deriative: ' . $sumDer;