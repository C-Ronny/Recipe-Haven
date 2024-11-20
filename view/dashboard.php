<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard | Recipe Haven</title>
  <link rel="stylesheet" href="../assets/dashboard.css">
  <link rel="icon" type="image/jpg" href="../assets/images/fav2.png" alt="Recipe Haven Icon">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <script>
    const navToggle = document.querySelector('.nav-toggle svg');
    const navMenu = document.querySelector('nav ul');

    navToggle.addEventListener('click', () => {
      navMenu.style.display = navMenu.style.display === 'flex' ? 'none' : 'flex';
    });
  </script>

</head>

<body>

  <div class="sidebar">
    <h3 id="logo">Recipe Haven</h3>

    <ul class="buttons">
      <li><a id="on-page" href="dashboard.php" label="Dashboard">Dashboard</a></li>
      <li><a href="users.php" label="Users">Users</a></li>
      <li><a href="recipes.php" label="Recipes">Recipes</a></li>
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
    <h1>Dashboard</h1>

    <div class="cards">
      <!--Number of Users-->
      <div class="card" id="users">
        <h3 class="name">No. of Users</h3>
        <h1 class="number" id="total_users"></h1>
        <!-- <h5 class="message">+50 new Users this month</h5> -->
      </div>

      <!--Number of Recipes-->
      <div class="card" id="recipes">
        <h3 class="name">No. of Recipes</h3>
        <h1 class="number" id="total_recipes">No recipes added yet</h1>
        <!-- <h5 class="message">+25 added recipes this month</h5> -->
      </div>


    </div>



  </div>

  <script src="../functions/dashboard.js"></script>

</body>

</html>