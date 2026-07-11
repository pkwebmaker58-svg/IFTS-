<?php
include 'db.php';
session_start();

if (!isset($_SESSION['admin_logged_in'])) exit;

$order_id = $_POST['order_id'];

$stmt = $conn->prepare("UPDATE orders SET payment_status='Verified' WHERE order_id=?");
$stmt->bind_param("s", $order_id);
$stmt->execute();

echo json_encode(['success' => true]);
?>