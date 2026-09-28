<?php
$a = [1,2, 5, 10, 3, 6, 4];
$b = [1=>"A", 5=>"X", 3=>"B", 2=>"D", 4=>"C"];
$c = ["a"=>10, "c"=>40, "d" => 20, "b" => 30, "e" => "50"];


echo "<pre>";
// echo min($a)."<br>";
// echo min($b)."<br>";
// echo min($c)."<br>";
// echo max($a)."<br>";
// echo max($b)."<br>";
// echo max($c)."<br>";

// echo array_sum($a)."<br>";
// echo array_sum($b)."<br>";
// echo array_sum($c)."<br>";

// sort($a);
// print_r($a);
// rsort($a);
// print_r($a);


// asort($b);
// print_r($b);

// asort($c);
// print_r($c);
// arsort($b);
// print_r($b);

// arsort($c);
// print_r($c);

// ksort($b);
// print_r($b);
// ksort($c);
// print_r($c);

// $na = array_reverse($a);
// $na = array_reverse($a, true);
// print_r($na);

$na = array_reverse($b, true);
print_r($na);
echo "</pre>";
?>