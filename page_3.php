<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="page_3.php" method="post">
    <!-- <form action="" method="post"> -->
    <!-- <form action="page_2.php" method="get"> -->
        <label>First Number</label><br>
        <input type="text" name="num_one"><br><br>
        <label>Second Number</label><br>
        <input type="text" name="num_two"><br><br>
        <input type="submit" value="ADD">
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $a = $_POST["num_one"];
        $b = $_POST["num_two"];

        $c = $a + $b;
        echo "Sum = ".$c;
    }
    ?>
</body>
</html>