<?php
session_start();
require 'Config.php'; 
// Ensure this file connects to your database

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product_id']))
 {
    $product_id = $_POST['product_id'];
    $session_id = session_id();

    // Check if product already in cart
    $stmt = $conn->prepare("SELECT * FROM cart WHERE session_id = ? AND product_id = ?");
    $stmt->bind_param('si', $session_id, $product_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Product already in cart, update quantity
        $stmt = $conn->prepare("UPDATE cart SET quantity = quantity + 1 WHERE session_id = ? AND product_id = ?");
        $stmt->bind_param('si', $session_id, $product_id);
        $stmt->execute();
    } else {
        // Product not in cart, add it
        $stmt = $conn->prepare("INSERT INTO cart (session_id, product_id, quantity) VALUES (?, ?, 1)");
        $stmt->bind_param('si', $session_id, $product_id);
        $stmt->execute();
    }
    
    echo 'Product added to cart successfully!';
} else {
    echo 'Invalid request.';
}
?>
