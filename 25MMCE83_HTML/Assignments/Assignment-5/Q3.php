<?php

$s = "The quick brown fox jumps over the lazy dog";

$vowels = 0;

for($i = 0; $i < strlen($s); $i++){
    if(strtolower($s[$i]) == "a" || strtolower($s[$i]) == "e" || strtolower($s[$i]) == "i" || strtolower($s[$i]) == "o" || strtolower($s[$i]) == "u"){
        $vowels++;
    }
}

echo "Number of vowels: ".$vowels;
echo "<br>";

$arr = explode(" ", $s);

echo "First word: ".$arr[0];
echo "<br>";

echo "Last word: ".$arr[count($arr)-1];
echo "<br>";

echo "Capitalized String: ".ucwords($s);
echo "<br>";

echo "String without spaces: ".str_replace(" ", "", $s);
echo "<br>";

$count = 0;

for($i = 0; $i < count($arr); $i++){
    if(strtolower($arr[$i]) == "the"){
        $count++;
    }
}

echo "The appears: ".$count." times";
echo "<br>";

echo "Updated String: ".str_replace("lazy dog", "smart cat", $s);

?>