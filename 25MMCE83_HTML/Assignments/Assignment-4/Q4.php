<?php
$n = 1234;
$sum = 0;
while ($n > 0){
    $rem = $n % 10;
    $sum = $sum + $rem;
    $n = $n / 10;
}
echo "the sum is:". $sum;
?>