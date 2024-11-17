<?php
require 'config.php';

// Query to fetch user details
$query = "
    SELECT 
        CONCAT(fname, ' ', lname) AS fullname,
        email,
        CASE 
            WHEN role = 1 THEN 'Super Admin'
            WHEN role = 2 THEN 'Admin'
            ELSE 'User'
        END AS role,
        created_at 
    FROM users
    ORDER BY created_at DESC;
";

$result = $conn->query($query);

$users = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($users);
?>
