<?php
echo "<pre>";
// var_dump($_POST);
// var_dump($_GET);
// var_dump($_REQUEST);
// var_dump($_SERVER);
echo "</pre>";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $a = $_POST["num_one"];
    $b = $_POST["num_two"];

    $c = $a + $b;
    echo "Sum = ".$c;
} else {
    echo "invalid request";
}
?>