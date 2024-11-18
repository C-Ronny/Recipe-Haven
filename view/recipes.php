<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Management</title>
    <link rel="stylesheet" href="../assets/recipes.css">
    <link rel="icon" type="image/jpg" href="../assets/images/fav2.png" alt="Recipe Haven Icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  </head>

  <body>

    <div class="sidebar">
      <h3 id="logo">Recipe Haven</h3>
      <ul class="buttons">
        <li><a href="dashboard.php" aria-label="Dashboard">Dashboard</a></li>
        <li><a href="users.php" aria-label="Users">Users</a></li>
        <li><a id="on-page" href="recipes.php" aria-label="Recipes">Recipes</a></li>
      </ul>
    </div>

    <nav class="menu">
      <h1>Recipe Haven</h1>
      <div class="nav-toggle">
        <ul id="nav-right-side">
          <li><a href="logIn.php" aria-label="Log In or Sign Out">Log In / Sign Out</a></li>
          <li><a href="saved_recipes.php" aria-label="Recipes">Recipes</a></li>
          <li><a href="dashboard.php" aria-label="Account">Account</a></li>
        </ul>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M4 3h16" />
          <path d="M4 9h16" />
          <path d="M4 15h16" />
        </svg>
      </div>
    </nav>

    <div class="content">
      <h1>Recipes</h1>
      <table class="content-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Recipe Type</th>
            <th>Date Created</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Pancakes</td>
            <td>Dominic</td>
            <td>Breakfast</td>
            <td>2024-01-15</td>
            <td>
              <button onclick="editRecipe()">Edit</button>
              <button onclick="confirmDelete()">Delete</button>
            </td>
          </tr>
        
        </tbody>
      </table>

      <button id="create" onclick="editRecipe()">Add Recipe</button>
      
    </div>

    <!-- Modal for editing Recipes -->
    <div id="editRecipeModal" class="modal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Recipe</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="editRecipeForm">
              <!-- Recipe Name -->
              <div class="mb-3">
                <label for="recipeName" class="form-label">Recipe Name</label>
                <input type="text" class="form-control" id="recipeName" placeholder="Enter the recipe name">
              </div>

              <!-- Recipe Type -->
              <div class="mb-3">
                <label for="recipeType" class="form-label">Recipe Type</label>
                <select class="form-control" id="recipeType">
                  <option value="breakfast">Breakfast</option>
                  <option value="lunch">Lunch</option>
                  <option value="dinner">Dinner</option>
                  <option value="snack">Snack</option>
                  <option value="dessert">Dessert</option>
                </select>
              </div>

              <!-- Description -->
              <div class="mb-3">
                <label for="foodDescription" class="form-label">Description</label>
                <textarea class="form-control" id="foodDescription" rows="3"></textarea>
              </div>

              <!-- Preparation Time -->
              <div class="mb-3">
                <label for="prepTime" class="form-label">Preparation Time (in minutes)</label>
                <input type="number" class="form-control" id="prepTime">
              </div>

              <!-- Cooking Time -->
              <div class="mb-3">
                <label for="cookTime" class="form-label">Cooking Time (in minutes)</label>
                <input type="number" class="form-control" id="cookTime">
              </div>

              <button class="btn btn-primary w-100" id="create" onclick="showAddRecipeModal()">Add Recipe</button>

              <!-- <button type="submit" class="btn btn-primary w-100">Add Recipe</button> -->
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Confirmation Dialog -->
    <div id="confirmDeleteDialog" class="modal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Confirm Deletion</h5>
            <button  type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color:white; background-color: white;"></button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to delete this user?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal" onclick="deleteUser()">Delete</button>
            <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../functions/recipe_functions.js"></script>
  </body>

</html>
