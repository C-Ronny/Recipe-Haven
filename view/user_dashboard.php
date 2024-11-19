<?php
// Include the database configuration
include '../db/config.php';

// Start the session
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
  header("Location: logIn.php");
  exit();
}

// Fetch user details from the database
$user_id = $_SESSION['user_id'];

$query = "SELECT fname, lname, email, role, created_at FROM users WHERE user_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

// Check if the user exists
if ($result->num_rows > 0) {
  $user = $result->fetch_assoc();
} else {
  echo "User not found.";
  exit();
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account | Recipe Haven</title>
  <link rel="stylesheet" href="../assets/user_dashboard.css">
  <link rel="icon" type="image/jpg" href="../assets/images/fav2.png" alt="Recipe Haven Icon">
</head>

<body>

  <div class="sidebar">
    <h3 id="logo">Recipe Haven</h3>
    <ul class="buttons">
      <li><a id="on-page" href="user_dashboard.php" label="Dashboard">Profile</a></li>
      <li><a href="saved_recipes.php" label="Users">Saved Recipes</a></li>
    </ul>
  </div>

  <div class="content">
    <h1>Account</h1>
    <h2>Welcome, <?= htmlspecialchars($user['fname']) ?>!</h2>

    <!-- User Info Card -->
    <div class="card">
      <h2>User Information</h2>
      <p><strong>First Name:</strong> <?= htmlspecialchars($user['fname']) ?></p>
      <p><strong>Last Name:</strong> <?= htmlspecialchars($user['lname']) ?></p>
      <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
      <p><strong>Role:</strong> <?= $user['role'] == 1 ? "Admin" : "Regular User" ?></p>

    </div>

    <!-- Saved Recipes Card -->
    <div class="card">
      <h2>Saved Recipes</h2>
      <p>You have <strong>8</strong> saved recipes. <a href="saved_recipes.php">View All</a></p>
    </div>

    <!-- Recent Activity Card -->
    <div class="card">
      <h2>Recent Activity</h2>
      <ul>
        <li>Rated <strong>Avocado Toast</strong> ★★★★☆</li>
        <li>Saved <strong>Banana Oat Waffles</strong> to favorites</li>
        <li>Commented on <strong>Blueberry Pancakes:</strong> "Delicious recipe, but a bit too sweet for my taste!"</li>
      </ul>
    </div>
  </div>

</body>

</html>