<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// $a = 5;
// $b = 10;
// $c = 9;

// if($a > $b && $a > $c){
//     echo "$a is greater";
// } else if ($b > $c){
//     echo "$b is greater";
// } else {
//     echo "$c is greater";
// }

// $i = 1;
// while ($i <= 10){
//     echo "$i ";
//     $i++;
// }

// for($i=10; $i>=1; $i--){
//     echo "$i ";
// }


$name = "Ram";
$age = 30;
?>

<!-- <h1>Hello <?php //echo $name ?>. You are <?php //echo $age ?> years old. </h1> -->

<table border="1" cellpadding="10">
    <tr>
        <th>Number</th>
        <th>Category</th>
    </tr>

    <?php
        // for($n=1; $n<=10; $n++){
        //     echo "<tr class=''>";
        //     echo "<td>$n</td>";
        //     echo "<td>";
        //     if($n % 2 == 0){
        //         echo "Even";
        //     } else {
        //         echo "Odd";
        //     }
        //     echo "</td>";
        //     echo "</tr>";
        // }


        // for($n=100; $n<=110; $n++){
        //     ?>
        //         <tr class="">
        //             <td><?php //echo $n ?></td>
        //             <td><?php //$n%2 == 0 ? print "Even" : print "Odd" ?></td>
        //         </tr>
        //     <?php
        // }
    ?>
    <table border="1" cellpadding="10">
    <?php
    // $n = 10;
    //     for($i = 1; $i <= 10; $i++){
    //         echo "<tr>";
    //         echo "<td>".$n." X ".$i."</td>";
    //         echo "<td>".$n*$i."</td>";
    //         echo "</tr>";
    //     }
    $n = 5;
    for($i = 1; $i <= 10; $i++){
    ?>
        <tr>
            <td><?php echo $n." X ".$i ?></td>
            <td><?php echo $n*$i ?></td>
        </tr>
    <?php
    }

    ?>
    </table>
</table>
</body>
</html>