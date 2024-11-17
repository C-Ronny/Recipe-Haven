<?php
require 'config.php';

// Fetch recipes with author details
$query = "
    SELECT 
        f.food_id AS id,
        f.name AS title,
        CONCAT(u.fname, ' ', u.lname) AS author,
        f.type AS recipe_type,
        f.created_at AS date_created
    FROM foods f
    LEFT JOIN users u ON f.created_by = u.user_id
    ORDER BY f.created_at DESC;
";

$result = $conn->query($query);

$recipes = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $recipes[] = $row;
    }
}

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($recipes);
?>
