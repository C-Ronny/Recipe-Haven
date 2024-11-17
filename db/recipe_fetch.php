<?php
require 'config.php';

if (isset($_GET['id'])) {
    $recipeId = $_GET['id'];

    $query = "SELECT * FROM foods WHERE food_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $recipeId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo json_encode($result->fetch_assoc());
    } else {
        echo json_encode(['error' => 'Recipe not found']);
    }

    $stmt->close();
} else {
    echo json_encode(['error' => 'No recipe ID provided']);
}
?>
