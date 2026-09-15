<?php
$string = "The quick brown fox jumps over the lazy dog";

$vowels = 'aeiouAEIOU';
$vowelCount = 0;
for ($i = 0; $i < strlen($string); $i++) {
    if (strpos($vowels, $string[$i]) !== false) {
        $vowelCount++;
    }
}
echo "a. Number of vowels: " . $vowelCount . "\n";

$words = explode(" ", $string);
$firstWord = $words[0];
$lastWord = end($words);
echo "b. First word: " . $firstWord . ", Last word: " . $lastWord . "\n";

$capitalized = ucwords(strtolower($string));
echo "c. Capitalized first letter of each word: " . $capitalized . "\n";

$noSpaces = str_replace(" ", "", $string);
echo "d. String without spaces: " . $noSpaces . "\n";

$theCount = substr_count(strtolower($string), "the");
echo "e. Count of 'the' (case-insensitive): " . $theCount . "\n";

$replaced = str_replace("lazy dog", "smart cat", $string);
echo "f. Updated string: " . $replaced . "\n";
?>