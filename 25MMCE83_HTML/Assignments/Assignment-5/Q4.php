<?php

$arr = [25, 10, 45, 7, 32, 18, 50, 3, 27, 15];

echo "Number of elements: ".count($arr);
echo "<br>";

$largest = $arr[0];
$smallest = $arr[0];

for($i = 1; $i < count($arr); $i++){
    if($arr[$i] > $largest){
        $largest = $arr[$i];
    }

    if($arr[$i] < $smallest){
        $smallest = $arr[$i];
    }
}

echo "Largest number: ".$largest;
echo "<br>";

echo "Smallest number: ".$smallest;
echo "<br>";

echo "Reverse array: ";

for($i = count($arr)-1; $i >= 0; $i--){
    echo $arr[$i]." ";
}

echo "<br>";

sort($arr);

echo "Sorted array: ";

for($i = 0; $i < count($arr); $i++){
    echo $arr[$i]." ";
}

echo "<br>";

rsort($arr);

echo "Reverse sorted array: ";

for($i = 0; $i < count($arr); $i++){
    echo $arr[$i]." ";
}

echo "<br>";

$found = false;

for($i = 0; $i < count($arr); $i++){
    if($arr[$i] == 10){
        echo "10 is present at index: ".$i;
        $found = true;
        break;
    }
}

if($found == false){
    echo "10 is not present in the array";
}

?>