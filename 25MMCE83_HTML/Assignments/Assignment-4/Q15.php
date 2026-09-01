<?php

$sum = 0;

function add($x){
    global $sum;

    $sum = $sum + $x;

    echo "Sum = ".$sum."<br>";
}

add(10);
add(20);
add(30);

?>