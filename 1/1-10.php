<?php
function reverse($x){
    $result = 0;
    while ($x != 0) {
        $number = $x % 10;
        $result = $result * 10 + $number;
        $x = (int)($x / 10);
    }
    return $result;
}
for($i = 10; $i <= 10000; $i++) {
    if($i == reverse($i) && $i * $i == reverse($i * $i)){
        echo $i.' ';
    }
}