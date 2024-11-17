<?php
require 'config.php';

// Get JSON input
$data = json_decode(file_get_contents('php://input'), true);

// Extract values
$email = $data['email'];
$fullname = $data['fullname'];
$role = $data['role'];

// Parse full name into first and last name
$nameParts = explode(' ', $fullname);
$fname = $nameParts[0];
$lname = isset($nameParts[1]) ? $nameParts[1] : '';

$query = "
    UPDATE users
    SET fname = ?, lname = ?, role = ?
    WHERE email = ?
";

$stmt = $conn->prepare($query);
$stmt->bind_param('ssis', $fname, $lname, $role, $email);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => $stmt->error]);
}
?>
