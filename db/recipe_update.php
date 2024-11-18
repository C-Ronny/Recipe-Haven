<?php
require 'config.php';

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['id'], $data['name'], $data['type'], $data['description'], $data['preparation_time'], $data['cooking_time'])) {
    $query = "
        UPDATE foods 
        SET name = ?, type = ?, description = ?, preparation_time = ?, cooking_time = ? 
        WHERE food_id = ?
    ";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssiii", $data['name'], $data['type'], $data['description'], $data['preparation_time'], $data['cooking_time'], $data['id']);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Failed to update recipe.']);
    }
    $stmt->close();
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid input.']);
}
?>
