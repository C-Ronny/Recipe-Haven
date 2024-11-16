<?php
require '../db/config.php';

// Fetch total users
$queryUsers = "SELECT COUNT(*) AS total_users FROM users";
$resultUsers = $conn->query($queryUsers);
$totalUsers = $resultUsers->fetch_assoc()['total_users'];

// Fetch total recipes
$queryRecipes = "SELECT COUNT(*) AS total_recipes FROM foods";
$resultRecipes = $conn->query($queryRecipes);
$totalRecipes = $resultRecipes->fetch_assoc()['total_recipes'];

// Fetch top 5 users with most recipes
$queryTopUsers = "
    SELECT u.fname, u.lname, COUNT(f.food_id) AS recipe_count
    FROM users u
    LEFT JOIN foods f ON u.user_id = f.created_by
    GROUP BY u.user_id
    ORDER BY recipe_count DESC
    LIMIT 5";
$resultTopUsers = $conn->query($queryTopUsers);

$topUsers = [];
while ($row = $resultTopUsers->fetch_assoc()) {
    $topUsers[] = [
        'name' => $row['fname'] . ' ' . $row['lname'],
        'recipes' => $row['recipe_count']
    ];
}

// Return data as JSON
echo json_encode([
    'totalUsers' => $totalUsers,
    'totalRecipes' => $totalRecipes,
    'topUsers' => $topUsers
]);
?>
