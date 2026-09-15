<?php
$numbers = [23, 5, 67, 10, 42, 8, 15, 10, 99, 3];

echo "Original array: ";
for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}
echo "\n\n";

$elementCount = count($numbers);
echo "a. Number of elements: " . $elementCount . "\n\n";

$largest = $numbers[0];
$smallest = $numbers[0];
for ($i = 1; $i < count($numbers); $i++) {
    if ($numbers[$i] > $largest) {
        $largest = $numbers[$i];
    }
    if ($numbers[$i] < $smallest) {
        $smallest = $numbers[$i];
    }
}
echo "b. Largest number: " . $largest . "\n";
echo "   Smallest number: " . $smallest . "\n\n";

$reversed = array_reverse($numbers);
echo "c. Reversed array: ";
for ($i = 0; $i < count($reversed); $i++) {
    echo $reversed[$i] . " ";
}
echo "\n\n";

$sorted = $numbers;
sort($sorted);
echo "d. Sorted array (ascending): ";
for ($i = 0; $i < count($sorted); $i++) {
    echo $sorted[$i] . " ";
}
echo "\n\n";

$sortedDesc = $numbers;
rsort($sortedDesc);
echo "e. Sorted array (descending): ";
for ($i = 0; $i < count($sortedDesc); $i++) {
    echo $sortedDesc[$i] . " ";
}
echo "\n\n";

$found = false;
$index = -1;
for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == 10) {
        $found = true;
        $index = $i;
        break;
    }
}
if ($found) {
    echo "f. Number 10 is present at index: " . $index . "\n";
} else {
    echo "f. Number 10 is not present in the array.\n";
}
?>