<?php

function isPrime($n){
    if($n < 2){
        return false;
    }

    for($i = 2; $i < $n; $i++){
        if($n % $i == 0){
            return false;
        }
    }

    return true;
}

$n = 10;
$found = false;

for($i = 2; $i <= $n / 2; $i++){
    $j = $n - $i;

    if(isPrime($i) && isPrime($j)){
        echo $n." = ".$i." + ".$j."<br>";
        $found = true;
    }
}

if($found == false){
    echo $n." cannot be represented as the sum of two prime numbers";
}

?>