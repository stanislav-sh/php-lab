<?php
$n = 12;
$m = 18;
$x = 2;

for($i = 1; $i < $n; $i++){
    $x *= 2;
}
$x += $m;

$xOrig = $x;
$reverse = 0;
$count = 0;
while ($x != 0) {
    $number = $x % 10;
    $count++;
    $reverse = $reverse * 10 + $number;
    $x = (int)($x / 10);
}

if($count % 2 == 0 && $reverse == $xOrig){
    echo "Symmetrical";
}
else{
    echo "Not symmetrical";
}