<?php
function count_arr($x)
{
    $count = 0;
    while (isset($x[$count])) {
        $count++;
    }
    return $count;
}

$A = Array(1, 2, 3, 5, 6);
$k = 3;
$B = Array(1, 4, 0, 8);
$i = 0;

while ($i < $k) {
    $j = 0;
    $count = count_arr($A);
    while ($j < $count) {
        $A[$count+2] = 0;
        print_r($A);
        if ($B[$i] <= $A[$j]) {
            $z = $j + 1;
            $zOrig = $z;


            while ($z - $count != 0) {
                $A[$z] = $A[$z - 1];
                $z++;
            }
            $A[$j] = $B[$k];
            $i++;
            $j++;
            continue;
        }
        $j++;
    }
    $i++;
}
print_r($A);