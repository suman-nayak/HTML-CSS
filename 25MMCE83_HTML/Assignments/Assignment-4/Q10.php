<?php

function swap(&$a, &$b){
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$x = 10;
$y = 20;

echo "Before Swapping:<br>";
echo "x = ".$x."<br>";
echo "y = ".$y."<br>";

swap($x, $y);

echo "<br>After Swapping:<br>";
echo "x = ".$x."<br>";
echo "y = ".$y;

?>