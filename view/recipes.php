<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Management</title>
    <link rel="stylesheet" href="../assets/recipes.css">
    <link rel="icon" type="image/jpg" href="../assets/images/fav2.png" alt="Recipe Haven Icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="sidebar">
      <h3 id="logo">Recipe Haven</h3>
      <ul class="buttons">
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="users.php">Users</a></li>
        <li><a id="on-page" href="recipes.php">Recipes</a></li>
      </ul>
    </div>

    <nav class="menu">
      <h1>Recipe Haven</h1>
    </nav>

    <div class="content">
      <h1>Recipes</h1>
      <table class="content-table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Title</th>
            <th>Author</th>
            <th>Recipe Type</th>
            <th>Date Created</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- Content dynamically populated via JavaScript -->
        </tbody>
      </table>

      <button class="btn btn-primary mt-3" id="create" >Add Recipe</button>
    </div>

    <!-- Modal for adding/editing recipes -->
    <div id="recipeModal" class="modal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add/Edit Recipe</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form id="recipeForm">
              <input type="hidden" id="recipeId" />
              <div class="mb-3">
                <label for="recipeName" class="form-label">Recipe Name</label>
                <input type="text" id="recipeName" class="form-control" required />
              </div>
              <div class="mb-3">
                <label for="recipeType" class="form-label">Recipe Type</label>
                <select id="recipeType" class="form-control">
                  <option value="breakfast">Breakfast</option>
                  <option value="lunch">Lunch</option>
                  <option value="dinner">Dinner</option>
                  <option value="snack">Snack</option>
                  <option value="dessert">Dessert</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" class="form-control"></textarea>
              </div>
              <div class="mb-3">
                <label for="prepTime" class="form-label">Preparation Time</label>
                <input type="number" id="prepTime" class="form-control" />
              </div>
              <div class="mb-3">
                <label for="cookTime" class="form-label">Cooking Time</label>
                <input type="number" id="cookTime" class="form-control" />
              </div>
              <button type="submit" class="btn btn-primary">Save Recipe</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../functions/recipe_functions.js"></script>
  </body>
</html>
