<?php
function is_prime($n){
    if ($n == 1)
        return false;
    for ($i = 2; $i * $i <= $n; $i++){
        if ($n % $i == 0)
            return false;
    }
    return true;
}
$N = 199;
if(is_prime($N)){
    echo 'Prime';
}
else{
    echo 'Not prime';
}
