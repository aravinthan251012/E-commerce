<?php
include("config/db.php");
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM products WHERE id = $id");
$product = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head><title><?php echo $product['name']; ?></title></head>
<body>
<h1><?php echo $product['name']; ?></h1>
<img src='images/<?php echo $product["image"]; ?>' width='200'><br>
<p><?php echo $product['description']; ?></p>
<p>₹<?php echo $product['price']; ?></p>
<a href='cart.php?id=<?php echo $product["id"]; ?>'>Add to Cart</a>
</body>
</html>