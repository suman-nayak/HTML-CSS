<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Restaurant Ordering System</title>

</head>

<body>

    <h1>Restaurant Ordering System</h1>

    <?php

    $menu = array(
        "P01" => array("name" => "Veg Pizza", "price" => 250),
        "P02" => array("name" => "Paneer Burger", "price" => 180),
        "P03" => array("name" => "Pasta", "price" => 220),
        "P04" => array("name" => "Veg Biryani", "price" => 200),
        "P05" => array("name" => "Sandwich", "price" => 150),
        "P06" => array("name" => "French Fries", "price" => 120),
        "P07" => array("name" => "Cold Coffee", "price" => 100)
    );

    ?>

    <form method="post" action="">

        <label>Customer Name:</label>

        <input type="text"
               name="customer"
               required>

        <br><br>

        <label>Food Item:</label>

        <select name="food" required>

            <option value="">Select Food Item</option>

            <?php

            foreach($menu as $code => $item){

                echo "<option value='".$code."'>";
                echo $item["name"];
                echo "</option>";

            }

            ?>

        </select>

        <br><br>

        <label>Quantity:</label>

        <input type="number"
               name="quantity"
               min="1"
               required>

        <br><br>

        <input type="submit"
               name="order"
               value="Place Order">

    </form>

    <?php

    if(isset($_POST["order"])){

        $customer = $_POST["customer"];
        $food = $_POST["food"];
        $quantity = $_POST["quantity"];

        $foodName = $menu[$food]["name"];
        $price = $menu[$food]["price"];

        $subtotal = $price * $quantity;

        if($subtotal < 500){

            $discount = 0;

        } elseif($subtotal < 1000){

            $discount = 5;

        } elseif($subtotal < 1500){

            $discount = 10;

        } else {

            $discount = 15;

        }

        $discountAmount = ($subtotal * $discount) / 100;

        $finalBill = $subtotal - $discountAmount;

        echo "<hr>";

        echo "<h2>RESTAURANT BILL</h2>";

        echo "<p><b>Customer Name :</b> ".$customer."</p>";

        echo "<p><b>Food Item :</b> ".$foodName."</p>";

        echo "<p><b>Unit Price :</b> ₹".$price."</p>";

        echo "<p><b>Quantity :</b> ".$quantity."</p>";

        echo "--------------------------------------------------------";
        
        echo "<p><b>Subtotal :</b> ₹".$subtotal."</p>";

        echo "<p><b>Discount :</b> ".$discount."%</p>";

        echo "<p><b>Discount Amount :</b> ₹".$discountAmount."</p>";

        echo "--------------------------------------------------------";

        echo "<p><b>Final Bill :</b> ₹".$finalBill."</p>";

    }

    ?>

</body>

</html>