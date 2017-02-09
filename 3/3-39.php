<?php
$A = Array(1, 1, 20, 3, 4, 4, 4, 5, 3, 3, 4, 5, 6, 6);
$B = Array();
$i = 0;
echo '<br>';
while (isset($A[$i])) {
    if (!isset($B[$A[$i]])) {
        $B[$A[$i]] = 0;
    }
    $B[$A[$i]]++;
    $i++;
}
$count = 0;
for ($i = 20; $i > 0; $i--) {
    for ($j = 1; $j <= 20; $j++) {
        if (isset($B[$j])) {
            if ($B[$j] == $i) {
                while ($B[$j] != 0) {
                    $A[$count] = $j;
                    $B[$j]--;
                    $count++;
                }
            }

        }
    }
}
print_r($A);
