<?php
function NOD($N, $M){
    while($N > 0 && $M > 0){
        if($N > $M){
            $N %= $M;
        }
        else{
            $M %= $N;
        }
    }
    return $N + $M;
}
$N = 100;
$M = 222;
echo $N * $M / NOD ($N, $M);
