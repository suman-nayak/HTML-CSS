<?php

function factorial($n){
    if($n == 0 || $n == 1){
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$n = 5;
$sum = 0;

for($i = 1; $i <= $n; $i++){
    $sum = $sum + (1 / factorial($i));
}

echo "Sum of series = ".$sum;

?>