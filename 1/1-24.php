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

function hex_count($x)
{
    $digits = 0;
    while ($x > 0)
    {
        ++$digits;
        $x = (int)($x / 16);
    }
    return $digits;
}

function print_hexadecimal($x)
{
    $size = hex_count($x) + 1;
    $buffer = Array();
    $index = $size - 2;
    while ($x > 0)
    {
       $mod = $x % 16;

        if ($mod >= 10)
            $buffer[$index--] = ($mod - 10). 'A';
        else
            $buffer[$index--] = $mod.'0';

        $x = (int)($x / 16);
        echo $buffer[$index + 1];
    }
    $buffer[$size - 1] = '\0';
    return $buffer;


}

$x = 267;
print_binary($x);
echo '<br>';
print_hexadecimal($x);