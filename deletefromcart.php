<?php
session_start();
require 'Config.php'; // Ensure this file connects to your database

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];
    $session_id = session_id();

    // Delete product from cart
    $stmt = $conn->prepare("DELETE FROM cart WHERE session_id = ? AND product_id = ?");
    $stmt->bind_param('si', $session_id, $product_id);
    $stmt->execute();

    echo 'Product removed from cart successfully!';
} else {
    echo 'Invalid request.';
}
?>
