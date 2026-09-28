<?php
if(!isset($_GET['pid'])){
    header("location:product_display.php");
}
$id = $_GET['pid'];
// echo "Details of $id";
// var_dump(isset($_GET['pid']));
require_once "db.php";
$sql = "SELECT * FROM product WHERE id=?";
$conn = get_connection();
$ps = $conn->prepare($sql);
$ps->bind_param("i", $id);
$ps->execute();
$rs = $ps->get_result();
$n_rows = $rs->num_rows;

// echo "Number of rows $n_rows";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once "navbar.php";
    ?>
    <h1>Product Details</h1>
    <?php
        if($n_rows == 1){
            $p = $rs->fetch_assoc();
            ?>
                <p>Name: <?php echo $p['name'] ?></p>
                <p>Category: <?php echo $p['category'] ?></p>
                <p>Quantity: <?php echo $p['quantity'] ?></p>
                <p>Unit Price: <?php echo $p['unit_price'] ?></p>
                <p>Status: <?php echo $p['status'] ?></p>
                <p>Description: <?php echo $p['description'] ?></p>
            <?php
        } else {
            echo "Invalid ID";
        }
    ?>
</body>
</html>