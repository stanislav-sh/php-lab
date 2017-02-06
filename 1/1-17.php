<?php
$N = 195;
$M = 200;
while($N > 0 && $M > 0){
    if($N > $M){
        $N %= $M;
    }
    else{
        $M %= $N;
    }
}
echo $N + $M;