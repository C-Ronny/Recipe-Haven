<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Recipes | Recipe Haven</title>
  <link rel="stylesheet" href="../assets/user_dashboard.css">
  <link rel="icon" type="image/jpg" href="../assets/images/fav2.png" alt="Recipe Haven Icon">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <!-- Save recipes script -->
  <script></script>

</head>

<body>

  <div class="sidebar">
    <h3 id="logo">Recipe Haven</h3>

    <ul class="buttons">
      <li><a href="user_dashboard.php" label="Dashboard">Profile</a></li>
      <li><a id="on-page" href="saved_recipes.php" label="Users">Saved Recipes</a></li>
    </ul>
  </div>

  <nav class="menu">
    <h1>Recipe Haven</h1>
    <div class="nav-toggle">
      <ul id="nav-right-side">
        <li><a href="logIn.php" aria-label="Log In or Sign Out">Log In / Sign Out</a></li>
        <li><a href="saved_recipes.php" label="Recipes">Recipes</a></li>
        <li><a href="dashboard.php" label="Account">Account</a></li>
      </ul>

      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-baseline-density-small">
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path d="M4 3h16" />
        <path d="M4 9h16" />
        <path d="M4 15h16" />
      </svg>
    </div>
  </nav>

  <div class="content">
    <h1>My Recipes</h1>

    <!------------------------------------------------------------------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------------------------------------------------------------------>

    <h2>Welcome, Eugene Daniels</h2>

    <!-- User Info Card -->
    <div class="card">
      <h2>User Information</h2>
      <p><strong>First Name:</strong> Eugene</p>
      <p><strong>Last Name:</strong> Daniels</p>
      <p><strong>Email:</strong> superadmin@gmail.com</p>
      <p><strong>Role:</strong> Super Admin</p>
      <p><strong>Member Since:</strong> November 7, 2024</p>
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
  <!------------------------------------------------------------------------------------------------------------------------------------------------>
  <!------------------------------------------------------------------------------------------------------------------------------------------------>
  <!------------------------------------------------------------------------------------------------------------------------------------------------>

  </div>

  <script src="../functions/dashboard.js"></script>

</body>

</html>