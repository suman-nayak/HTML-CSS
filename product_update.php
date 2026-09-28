<?php
if(!isset($_GET['pid'])){
    header("location:product_display.php");
}
$id = $_GET['pid'];
$msg = "";
require_once "db.php";

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try{
            $name = $_POST['name'];
            $category = $_POST['category'];
            $quantity = $_POST['quantity'];
            $unit_price = $_POST['unit_price'];
            $status = $_POST['status'];
            $description = $_POST['description'];

            $sql = "UPDATE product SET name=?, category=?, quantity=?, unit_price=?, status=?, description=? WHERE id=?";

            $conn = get_connection();
            $ps = $conn -> prepare($sql);

            $ps->bind_param("ssidssi", $name, $category, $quantity, $unit_price, $status, $description, $id);

            $res = $ps->execute();
            if($res){
                $msg = "Product Updated";
            }
            $conn->close();
        } catch(mysqli_sql_exception $se){
            $msg = "DB Error: ".$se->getMessage(). " @Line: ".$se->getLine();
        } catch(Exception $e){
            $msg = "Error: ".$e->getMessage(). " @Line: ".$e->getLine();
        }

        
    }


$sql = "SELECT * FROM product WHERE id=?";
$conn = get_connection();
$ps = $conn->prepare($sql);
$ps->bind_param("i", $id);
$ps->execute();
$rs = $ps->get_result();
$n_rows = $rs->num_rows;

// echo "Number of rows $n_rows";
if($n_rows != 1){
    ?>
        <script>
            alert("Invlaid ID");
            window.location="product_display.php";
        </script>
    <?php
}
$p = $rs->fetch_assoc();
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
    <h1>Product Update</h1>
    <p><?php echo $msg; ?></p>
    <form action="product_update.php?pid=<?php echo $p['id'] ?>" method="post"> <!-- action Update -->
        <label>Name</label> <br>
        <input type="text" name="name" value="<?php echo $p['name'] ?>"><br>
        <label>Category</label> <br>
        <select name="category" id="">
            <option 
            value="Electronics" 
            <?php $p['category'] == 'Electronics' ? print "selected" : "" ?>
            >Electronics</option>

            <option 
            value="Clothing" 
            <?php $p['category'] == 'Clothing' ? print "selected" : "" ?>
            >Clothing</option>

            <option value="Food" 
            <?php $p['category'] == 'Food' ? print "selected" : "" ?>
            >Food</option>

            <option value="Other" 
            <?php $p['category'] == 'Other' ? print "selected" : "" ?>>Other</option>
        </select> <br>
        <label>Quantity</label> <br>
        <input type="text" name="quantity" value="<?php echo $p['quantity'] ?>"><br>
        <label>Unit Price</label> <br>
        <input type="text" name="unit_price" value="<?php echo $p['unit_price'] ?>"><br>
        <label>Status</label> <br>
        <input type="radio" name="status" value="Active"
            <?php $p['status'] == 'Active' ? print "checked" : "" ?>
        > Active
        <input type="radio" name="status" value="On Hold"
            <?php $p['status'] == 'On Hold' ? print "checked" : "" ?>
        > On Hold
        <input type="radio" name="status" value="Discontinued" 
            <?php $p['status'] == 'Discontinued' ? print "checked" : "" ?>
        > Discontinued
        <br>
        <label>Description</label> <br>
        <textarea name="description" rows="5" cols="20"><?php echo $p['description'] ?></textarea>
        <br>
        <input type="submit" value="Update">
    </form>
</body>
</html>