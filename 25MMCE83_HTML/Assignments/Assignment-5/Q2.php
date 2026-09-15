<?php

$str = "PHP stands for PHP Hypertext Preprocessor";
echo "a. Length string: " . strlen($str);
echo "<br>";
echo "b. Uppercase: " . strtoupper($str);
echo "<br>";
$words = explode(" ", $str);
$lengths = array_map("strlen", $words);
$maxLength = max($lengths);
$minLength = min($lengths);

$maxWords = [];
$minWords = [];

foreach ($words as $word) {
    if (strlen($word) == $maxLength) {
        $maxWords[] = $word;
    }
    if (strlen($word) == $minLength) {
        $minWords[] = $word;
    }
}

echo "c. Max length word: " . implode(", ", $maxWords) . " (" . $maxLength . ")";
echo "<br>";
echo "Min length word: " . implode(", ", $minWords) . " (" . $minLength . ")";
echo "<br>";
echo "d. Constructed string: " . implode("-", $words);
echo "<br>";
echo "e. Location of PHP: " . strpos($str, "PHP");
echo "<br>";
echo "f. Replaced string: " . str_replace("PHP", "XYZ", $str);

?>