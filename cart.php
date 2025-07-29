<?php
session_start();
include("config/db.php");
if (isset($_GET['id'])) {
    $_SESSION['cart'][] = $_GET['id'];
}
echo "<h1>Cart</h1>";
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $id) {
        $result = $conn->query("SELECT * FROM products WHERE id = $id");
        $product = $result->fetch_assoc();
        echo "<p>{$product['name']} - ₹{$product['price']}</p>";
    }
} else {
    echo "Cart is empty.";
}
?>