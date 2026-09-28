<?php
include_once "navbar.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $search_key = $_POST['search_key'];

    require_once "db.php";
    $sql = "SELECT * FROM product WHERE name LIKE'%$search_key%'";
    $conn = get_connection();
    $ps = $conn->prepare($sql);
    $ps->execute();
    $rs = $ps->get_result();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <h1>Search Result</h1>
    <?php
        $n_r = $rs->num_rows;
        if($n_r < 1){
            echo "<h1>No Item Found</h1>";
        } else {
    ?>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php while($p = $rs->fetch_assoc()) {  ?>
            <tr>
                <td><?php echo $p['name'] ?></td>
                <td><?php echo $p['quantity'] ?></td>
                <td><?php echo $p['status'] ?></td>
                <td>
                    <a href="product_details.php?pid=<?php echo $p['id'] ?>">👁️</a>
                    <a href="product_update.php?pid=<?php echo $p['id'] ?>">🖋️</a>
                    <a 
                    href="product_delete.php?pid=<?php echo $p['id'] ?>"
                    onclick="return confirm('Are you sure?')"
                    >❌</a>
                </td>
            </tr>
        <?php 
        }
        }
        $conn->close(); 
        ?>
    </table>
</body>
</html>