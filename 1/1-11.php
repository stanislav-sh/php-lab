<?php
$m = 1000;
for ($i = 1; $i <= $m; $i++) {
        $iCurrent = $i;
        $sum = 0;
        while ($iCurrent != 0) {
            $sum += $iCurrent % 10;
            $iCurrent = (int)($iCurrent / 10);
        }
        if ($i % $sum == 0) {
            echo $i . ' ';
        }
    }