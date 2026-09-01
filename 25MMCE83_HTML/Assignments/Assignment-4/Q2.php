<?php

$price = 4500;

if($price > 3999){
    $discount = $price * 10 / 100;
} else if($price > 2999){
    $discount = $price * 8 / 100;
} else if($price > 1999){
    $discount = $price * 5 / 100;
} else {
    $discount = 0;
}

$finalPrice = $price - $discount;

echo "Initial Price = ".$price."<br>";
echo "Discount = ".$discount."<br>";
echo "Final Price = ".$finalPrice;

?>