<?php
// $arr = [1, 3.4, 5.1, false, "Hello", [2,3,4,5]];
// echo $arr;
// print_r, var_dump

// echo "<pre>";
// print_r($arr);

// var_dump($arr);
// echo "</pre>";
// $fruits = ["mango", "banana", "lichi", "pineapple", "watermelon"];
$fruits = array("mango", "banana", "lichi", "pineapple", "watermelon");


// for($i=0; $i<count($fruits); $i++){
//     echo "<br>".$fruits[$i];
// }

// foreach loop
// foreach($arr_var as $var){
// $var
//}

// foreach($fruits as $f){
//     echo "<br>".$f;
// }

// echo "<ul>";
// foreach($fruits as $f){
//     echo "<li>".$f."</li>";
// }
// echo "</ul>";
?>

<ol>
<?php foreach($fruits as $f) {?>
<li><?php echo $f ?></li>
<?php } ?>
</ol>

<?php
// $stds = ["ram" => 9.2, "sam" => 9.1, "riya" => 8.7, "amrita" => 9.5];
$stds = array("ram" => 9.2, "sam" => 9.1, "riya" => 8.7, "amrita" => 9.5);

// foreach($stds as $s){ # values
// foreach($stds as $name => $cgpa){ # key => value
//     // echo $s."<br>";
//     echo $name." ".$cgpa."<br>";
// }
?>

<table border="1" cellpadding="10">
    <tr><th>Name</th><th>CGPA</th></tr>
    <?php foreach($stds as $n => $c) { ?>
        <tr>
            <td><?php echo $n ?></td>
            <td><?php echo $c ?></td>
        </tr>
    <?php } ?>

</table>