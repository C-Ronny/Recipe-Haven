<?php
require 'config.php';

// Get JSON input
$data = json_decode(file_get_contents('php://input'), true);

// Extract email
$email = $data['email'];

$query = "DELETE FROM users WHERE email = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('s', $email);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => $stmt->error]);
}
?>
