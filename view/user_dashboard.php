<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account | Recipe Haven</title>
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
              
        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-baseline-density-small"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 3h16" /><path d="M4 9h16" /><path d="M4 15h16" /></svg>
    </div>
  </nav>

  <div class="content">
    <h1>Dashboard</h1>

    <div class="cards">
      <!--Number of Users-->
      <div class="card" id="users">
        <h3 class="name"  >No. of Users</h3>
        <h1 class="number" id="total_users"></h1>                    
        <!-- <h5 class="message">+50 new Users this month</h5> -->
      </div>
    
      <!--Number of Recipes-->
      <div class="card" id="recipes">
        <h3 class="name">No. of Recipes</h3>
        <h1 class="number" id="total_recipes"></h1>                    
        <!-- <h5 class="message">+25 added recipes this month</h5> -->
      </div>
    
      <!--Recipe Chart-->
      <div class="main-container">
        <div class="year-stats">
          <div class="month-group">
            <div class="bar h-100"></div>
            <p class="month">Jan</p>
          </div>
          <div class="month-group">
            <div class="bar h-50"></div>
            <p class="month">Feb</p>
          </div>
          <div class="month-group">
            <div class="bar h-75"></div>
            <p class="month">Mar</p>
          </div>
          <div class="month-group">
            <div class="bar h-25"></div>
            <p class="month">Apr</p>
          </div>
          <div class="month-group">
            <div class="bar h-100"></div>
            <p class="month">May</p>
          </div>
          <div class="month-group">
            <div class="bar h-50"></div>
            <p class="month">Jun</p>
          </div>
          <div class="month-group">
            <div class="bar h-75"></div>
            <p class="month">Jul</p>
          </div>
          <div class="month-group">
            <div class="bar h-25"></div>
            <p class="month">Aug</p>
          </div>
          <div class="month-group">
            <div class="bar h-50"></div>
            <p class="month">Sep</p>
          </div>
          <div class="month-group">
            <div class="bar h-75"></div>
            <p class="month">Oct</p>
          </div>
          <div class="month-group">
            <div class="bar h-25"></div>
            <p class="month">Nov</p>
          </div>
          <div class="month-group">
            <div class="bar h-100"></div>
            <p class="month">Dec</p>
          </div>
        </div>
    
        <div class="stats-info">
          <div class="info">
            <p>Recipes Added per Month</p>            
          </div>
        </div>

      </div> 

      

      <!--Top 5 active users-->
      <div class="main-container">
        <div class="chart">
          <div class="bar2" style="--bar-height: 100%;">
            <div class="section" style="--section-value: 20;" data-value="20"></div>
            <div class="section" style="--section-value: 30;" data-value="30"></div>
            <div class="section" style="--section-value: 50;" data-value="50"></div>
            <div class="label">User1</div>
          </div>
          <div class="bar2" style="--bar-height: 60%;">
            <div class="section" style="--section-value: 20;" data-value="20"></div>
            <div class="section" style="--section-value: 30;" data-value="20"></div>
            <div class="section" style="--section-value: 50;" data-value="20"></div>
            <div class="label">User2</div>
          </div>
          <div class="bar2" style="--bar-height: 80%;">
            <div class="section" style="--section-value: 20;" data-value="20"></div>
            <div class="section" style="--section-value: 20;" data-value="20"></div>
            <div class="section" style="--section-value: 40;" data-value="40"></div>
            <div class="label">User3</div>
          </div>
          <div class="bar2" style="--bar-height: 50%;">
            <div class="section" style="--section-value: 40;" data-value="40"></div>
            <div class="section" style="--section-value: 5;" data-value="5"></div>
            <div class="section" style="--section-value: 5;" data-value="5"></div>
            <div class="label">User4</div>
          </div>          
          <div class="bar2" style="--bar-height: 70%;">
            <div class="section" style="--section-value: 20;" data-value="20"></div>
            <div class="section" style="--section-value: 30;" data-value="30"></div>
            <div class="section" style="--section-value: 20;" data-value="20"></div>
            <div class="label">User5</div>
          </div>
          
        </div>
      </div>
                          

    </div>
    
    

  </div>

  <script src="../functions/dashboard.js"></script>

</body>

</html>
