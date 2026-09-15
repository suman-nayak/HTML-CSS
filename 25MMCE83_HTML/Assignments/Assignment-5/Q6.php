<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f2f2f2;
        }

        .container {
            margin-top: 30px;
        }

        .heading {
            text-align: center;
            margin-bottom: 25px;
        }

        .info-box {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0px 2px 8px #cccccc;
        }

        .card {
            height: 100%;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0px 3px 10px #cccccc;
        }

        .card img {
            height: 200px;
            object-fit: contain;
            padding: 15px;
        }

        .card-body {
            text-align: center;
        }

        .product-name {
            font-weight: bold;
            font-size: 22px;
        }

        .old-price {
            text-decoration: line-through;
            color: #888888;
        }

        .discount-price {
            font-size: 20px;
            font-weight: bold;
        }

        .stock {
            margin-top: 10px;
        }
    </style>
</head>

<body>
<?php

$products = [
    "product1" => [
        "name" => "Laptop",
        "price" => 800,
        "stock" => 15,
        "image" => "https://png.pngtree.com/png-vector/20250304/ourmid/pngtree-sleek-modern-laptop-with-high-resolution-display-png-image_15711292.png"
    ],
    "product2" => [
        "name" => "Smartphone",
        "price" => 400,
        "stock" => 20,
        "image" => "https://img-prd-pim.poorvika.com/product/Samsung-galaxy-s26-ultra-5g-black-12gb-512gb-Front-Back-View.webp"
    ],
    "product3" => [
        "name" => "Headphones",
        "price" => 250,
        "stock" => 50,
        "image" => "https://www.boat-lifestyle.com/cdn/shop/files/Rockerz512ANCpackagingrenders.32_1800x.png?v=1755499445"
    ],
    "product4" => [
        "name" => "Keyboard",
        "price" => 950,
        "stock" => 10,
        "image" => "https://media.wired.com/photos/6928c534e7dd69f52e08eeb0/master/w_1600%2Cc_limit/Tecware%2520Spectre75-2%2520source%2520henri%2520robbins.png"
    ]
];

echo '<div class="container">';

echo '<h1 class="heading">Product Details</h1>';

echo '<div class="info-box">';

echo "<h5>Price of product2: ".$products["product2"]["price"]."</h5>";

if($products["product3"]["stock"] > 0){
    echo "<p>Product3 Status: In stock</p>";
} else {
    echo "<p>Product3 Status: Out of stock</p>";
}

$total = 0;

foreach($products as $product){
    $total += $product["price"];
}

$average = $total / count($products);

echo "<p>Average Price: ".$average."</p>";

echo '</div>';

echo '<div class="row g-4">';

foreach($products as $product){

    $discountPrice = $product["price"] - ($product["price"] * 10 / 100);

    echo '<div class="col-md-6 col-lg-3">';

    echo '<div class="card">';

    echo '<img src="'.$product["image"].'" class="card-img-top" alt="'.$product["name"].'">';

    echo '<div class="card-body">';

    echo '<div class="product-name">'.$product["name"].'</div>';

    echo '<p class="mt-3">Original Price: <span class="old-price">'.$product["price"].'</span></p>';

    echo '<p class="discount-price">10% Discount: '.$discountPrice.'</p>';

    echo '<p class="stock">Stock: '.$product["stock"].'</p>';

    echo '</div>';

    echo '</div>';

    echo '</div>';
}

echo '</div>';

echo '</div>';

?>

</body>
</html>