<?php
require 'config.php';

// Decode the incoming JSON payload
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['id'])) {
    $recipeId = $data['id'];

    $query = "DELETE FROM foods WHERE food_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $recipeId);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Failed to delete recipe']);
    }

    $stmt->close();
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid recipe ID']);
}
?>
