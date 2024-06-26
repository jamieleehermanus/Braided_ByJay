<?php
session_start();
require 'Config.php'; // Ensure this file connects to your database

$session_id = session_id();

// Query to count the total quantity of items in the cart
$stmt = $conn->prepare("SELECT SUM(quantity) as total_quantity FROM cart WHERE session_id = ?");
$stmt->bind_param('s', $session_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

$total_quantity = $row['total_quantity'] ?? 0; // If no items in cart, set total_quantity to 0

echo $total_quantity;
?>
