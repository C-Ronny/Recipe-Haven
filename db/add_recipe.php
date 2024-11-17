<?php
require 'config.php';

// Decode incoming JSON data
$data = json_decode(file_get_contents('php://input'), true);

// Validate required fields
if (isset($data['name'], $data['type'], $data['description'], $data['preparation_time'], $data['cooking_time'], $data['created_by'])) {
    $name = $data['name'];
    $type = $data['type'];
    $description = $data['description'];
    $preparation_time = $data['preparation_time'];
    $cooking_time = $data['cooking_time'];
    $created_by = $data['created_by'];

    $query = "
        INSERT INTO foods (name, type, description, preparation_time, cooking_time, created_by, created_at)
        VALUES (?, ?, ?, ?, ?, ?, NOW())
    ";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssiii", $name, $type, $description, $preparation_time, $cooking_time, $created_by);

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'id' => $stmt->insert_id]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Failed to add recipe.']);
    }
    $stmt->close();
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid input.']);
}
?>
