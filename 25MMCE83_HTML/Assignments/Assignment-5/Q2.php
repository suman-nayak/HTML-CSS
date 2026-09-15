<?php

$s = "PHP stands for PHP Hypertext Preprocessor";

echo "String: ".$s;
echo "<br>";

echo "Length: ".strlen($s);
echo "<br>";

echo "Upper Case: ".strtoupper($s);
echo "<br>";

$arr = explode(" ", $s);

$max = $arr[0];
$min = $arr[0];

for($i = 1; $i < count($arr); $i++){
    if(strlen($arr[$i]) > strlen($max)){
        $max = $arr[$i];
    }

    if(strlen($arr[$i]) < strlen($min)){
        $min = $arr[$i];
    }
}

echo "Maximum Length Word: ".$max." = ".strlen($max);
echo "<br>";
echo "Minimum Length Word: ".$min." = ".strlen($min);
echo "<br>";

echo "New String: ".implode("-", $arr);
echo "<br>";

echo "Location of PHP: ".strpos($s, "PHP");
echo "<br>";

echo "After Replace: ".str_replace("PHP", "XYZ", $s);

?>