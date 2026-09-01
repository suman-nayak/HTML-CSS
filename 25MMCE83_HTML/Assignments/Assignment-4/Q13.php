<?php

function sum(...$nums){

    if(count($nums) < 2){
        echo "Insufficient number of operand";
        return NULL;
    }
    $sum = 0;

    for($i = 0; $i < count($nums); $i++){
        $sum = $sum + $nums[$i];
    }

    return $sum;
}

echo "Sum = ".sum(10, 20, 30, 40);
?>