<?php
if(!isset($_GET['pid'])){
    header("location:product_display.php");
}
$id = $_GET['pid'];

require_once "db.php";

$sql = "DELETE FROM product WHERE id=?";
$conn = get_connection();
$ps = $conn->prepare($sql);
$ps->bind_param("i", $id);
$result = $ps->execute();
if($result){
    ?>
        <script>
            alert("Product Deleted");
            window.location = "product_display.php";
        </script>
    <?php
    header();
} else {
    ?>
        <script>
            alert("Product Not Deleted");
            window.location = "product_display.php";
        </script>
    <?php
}
?>