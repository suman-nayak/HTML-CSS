<?php

function calculate_discount($price, $discount = 10){
    $discountAmount = $price * $discount / 100;
    $finalPrice = $price - $discountAmount;

    return $finalPrice;
}

$price = 5000;

$finalPrice = calculate_discount($price);

echo "Initial Price = ".$price."<br>";
echo "Discount = 10%<br>";
echo "Final Price = ".$finalPrice;

?>