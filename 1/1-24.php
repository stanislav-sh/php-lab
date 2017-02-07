<?php
function print_binary($x)
{
    $arr = Array();
    $i = 0;
    while ($x != 0) {
        $rem = $x % 2;
        $arr[$i] = $rem;
        $i++;
        $x = (int)($x / 2);
    }
    for ($j = $i - 1; $j >= 0; $j--) {
        echo $arr[$j];
    }
}

function print_hexadecimal($x)
{
    $result = '';
    $arr = Array('A', 'B', 'C', 'D', 'E', 'F');
    do {
        $remain = $x % 16;
        $x = (int)($x / 16);
        if ($remain < 10) {
            $result = (string)$remain . $result;
        } else {
            $result = $arr[$remain - 10] . $result;
        }

    } while ($x != 0);
    echo $result;
}

$x = 1239;
print_binary($x);
echo '<br>';
print_hexadecimal($x);