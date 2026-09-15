<?php
$products = [
    "product1" => [
        "name" => "Laptop",
        "price" => 800,
        "stock" => 15,
        "image" => "laptop.png"
    ],
    "product2" => [
        "name" => "Smartphone",
        "price" => 400,
        "stock" => 20,
        "image" => "phone.png"
    ],
    "product3" => [
        "name" => "Headphones",
        "price" => 250,
        "stock" => 50,
        "image" => "phone.png"
    ],
    "product4" => [
        "name" => "Keyboard",
        "price" => 950,
        "stock" => 10,
        "image" => "keyboard.png"
    ]
];

$totalPrice = 0;

foreach ($products as $product) {
    $totalPrice += $product["price"];
}

$averagePrice = $totalPrice / count($products);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Cards</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f5f5;
        }

        .product-card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px #ccc;
        }

        .product-card img {
            width: 100%;
            height: 190px;
            object-fit: contain;
            padding: 15px;
            background: #fafafa;
        }

        .product-details {
            padding: 18px;
        }

        .product-name {
            font-size: 22px;
            font-weight: bold;
        }

        .price {
            font-size: 18px;
            margin: 10px 0;
        }
    </style>
</head>
<body>

<div class="container py-4">

    <h3>i. Price of Product 2</h3>
    <p>Price: Rs. <?php echo $products["product2"]["price"]; ?></p>

    <h3>ii. Stock Status of Product 3</h3>

    <?php if ($products["product3"]["stock"] > 0): ?>
        <p>In stock</p>
    <?php else: ?>
        <p>Out of stock</p>
    <?php endif; ?>

    <h3>iii. Average Price</h3>
    <p>Average price: Rs. <?php echo number_format($averagePrice, 2); ?></p>

    <h3>iv. Products after 10% Discount</h3>

    <div class="row g-4">

        <?php foreach ($products as $product): ?>

            <?php $discountedPrice = $product["price"] * 0.90; ?>

            <div class="col-md-6 col-lg-3">
                <div class="product-card">

                    <img src="<?php echo $product["image"]; ?>"
                         alt="<?php echo $product["name"]; ?>">

                    <div class="product-details">
                        <div class="product-name">
                            <?php echo $product["name"]; ?>
                        </div>

                        <div class="price">
                            Rs. <?php echo number_format($discountedPrice, 2); ?>
                        </div>

                        <p>
                            Original Price:
                            <del>Rs. <?php echo number_format($product["price"], 2); ?></del>
                        </p>

                        <p>Stock: <?php echo $product["stock"]; ?></p>

                        <?php if ($product["stock"] > 0): ?>
                            <button class="btn btn-primary">Buy Now</button>
                        <?php else: ?>
                            <button class="btn btn-secondary" disabled>
                                Out of Stock
                            </button>
                        <?php endif; ?>
                    </div>

                </div>
            </div>

        <?php endforeach; ?>

    </div>
</div>

</body>
</html>