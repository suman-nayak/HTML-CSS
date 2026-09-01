<?php

$a = 20;
$b = 10;

echo "First Number = ".$a."<br>";
echo "Second Number = ".$b."<br>";

echo "Addition = ".($a + $b)."<br>";
echo "Subtraction = ".($a - $b)."<br>";
echo "Multiplication = ".($a * $b)."<br>";
echo "Division = ".($a / $b)."<br>";
echo "Modulus = ".($a % $b)."<br>";

$large = ($a > $b) ? $a : $b;

echo "Larger Number = ".$large;

?>