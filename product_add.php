<?php
    require_once "db.php";
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
    $msg = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try{
            $name = $_POST['name'];
            $category = $_POST['category'];
            $quantity = $_POST['quantity'];
            $unit_price = $_POST['unit_price'];
            $status = $_POST['status'];
            $description = $_POST['description'];

            $sql = "INSERT INTO product(name, category, quantity, unit_price, status, description) VALUES(?,?,?,?,?,?)";

            $conn = get_connection();
            $ps = $conn -> prepare($sql);

            $ps->bind_param("ssidss", $name, $category, $quantity, $unit_price, $status, $description);

            $res = $ps->execute();
            if($res){
                $msg = "Product Added";
            }
            $conn->close();
        } catch(mysqli_sql_exception $se){
            $msg = "DB Error: ".$se->getMessage(). " @Line: ".$se->getLine();
        } catch(Exception $e){
            $msg = "Error: ".$e->getMessage(). " @Line: ".$e->getLine();
        }

        
    }
    ?>
    <h1>Add Product</h1>
    <p><?php echo $msg; ?></p>
    <form action="product_add.php" method="post">
        <label>Name</label> <br>
        <input type="text" name="name"><br>
        <label>Category</label> <br>
        <select name="category" id="">
            <option value="Electronics">Electronics</option>
            <option value="Clothing">Clothing</option>
            <option value="Food">Food</option>
            <option value="Other">Other</option>
        </select> <br>
        <label>Quantity</label> <br>
        <input type="text" name="quantity"><br>
        <label>Unit Price</label> <br>
        <input type="text" name="unit_price"><br>
        <label>Status</label> <br>
        <input type="radio" name="status" value="Active"> Active
        <input type="radio" name="status" value="On Hold"> On Hold
        <input type="radio" name="status" value="Discontinued"> Discontinued
        <br>
        <label>Description</label> <br>
        <textarea name="description" rows="5" cols="20"></textarea>
        <br>
        <input type="submit" value="ADD">
    </form>
</body>
</html>