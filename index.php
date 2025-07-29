<?php include("config/db.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>eCommerce - Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>All Products</h1>
    <div class="products">
        <?php
        $result = $conn->query("SELECT * FROM products");
        while ($row = $result->fetch_assoc()) {
            echo "<div class='product'>
                    <img src='images/{$row['image']}' width='150'><br>
                    <strong>{$row['name']}</strong><br>
                    ₹{$row['price']}<br>
                    <a href='product.php?id={$row['id']}'>View</a>
                  </div>";
        }
        ?>
    </div>
</body>
</html>