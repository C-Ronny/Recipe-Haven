// Fetch recipes and populate the table on page load
document.addEventListener("DOMContentLoaded", function () {
  fetchRecipes();
});

// Fetch recipes from the database
function fetchRecipes() {
  fetch('../php/recipe_functions.php')
    .then((response) => response.json())
    .then((data) => {
      const tableBody = document.querySelector('.content-table tbody');
      tableBody.innerHTML = ''; // Clear existing rows

      data.forEach((recipe) => appendRecipeToTable(recipe, tableBody));
    })
    .catch((error) => console.error('Error fetching recipes:', error));
}

// Append a single recipe row to the table
function appendRecipeToTable(recipe, tableBody) {
  const row = document.createElement('tr');

  // Create table cells
  const idCell = document.createElement('td');
  idCell.textContent = recipe.id;

  const titleCell = document.createElement('td');
  titleCell.textContent = recipe.title;

  const authorCell = document.createElement('td');
  authorCell.textContent = recipe.author;

  const typeCell = document.createElement('td');
  typeCell.textContent = recipe.recipe_type;

  const dateCell = document.createElement('td');
  dateCell.textContent = new Date(recipe.date_created).toLocaleDateString();

  const actionsCell = document.createElement('td');

  // Edit button
  const editButton = document.createElement('button');
  editButton.textContent = 'Edit';
  editButton.classList.add('btn', 'btn-primary', 'me-2');
  editButton.onclick = () => editRecipe(recipe.id);
  actionsCell.appendChild(editButton);

  // Delete button
  const deleteButton = document.createElement('button');
  deleteButton.textContent = 'Delete';
  deleteButton.classList.add('btn', 'btn-danger');
  deleteButton.onclick = () => confirmDelete(recipe.id);
  actionsCell.appendChild(deleteButton);

  // Append cells to the row
  row.appendChild(idCell);
  row.appendChild(titleCell);
  row.appendChild(authorCell);
  row.appendChild(typeCell);
  row.appendChild(dateCell);
  row.appendChild(actionsCell);

  tableBody.appendChild(row);
}

// Show modal for adding a recipe
document.getElementById('create').addEventListener('click', function () {
  const modal = new bootstrap.Modal(document.getElementById('editRecipeModal'));
  document.getElementById('editRecipeForm').reset();
  modal.show();
});

// Handle form submission for adding a recipe
document.getElementById('editRecipeForm').addEventListener('submit', function (event) {
  event.preventDefault();

  const formData = {
    name: document.getElementById('recipeName').value.trim(),
    type: document.getElementById('recipeType').value,
    description: document.getElementById('foodDescription').value.trim(),
    preparation_time: parseInt(document.getElementById('prepTime').value, 10),
    cooking_time: parseInt(document.getElementById('cookTime').value, 10),
    created_by: 1, // Replace with logged-in user ID
  };

  fetch('../php/recipe_add.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify(formData),
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        formData.id = data.id; // Add the returned ID
        formData.date_created = new Date().toISOString(); // Add current date
        const tableBody = document.querySelector('.content-table tbody');
        appendRecipeToTable(formData, tableBody);

        const modal = bootstrap.Modal.getInstance(document.getElementById('editRecipeModal'));
        modal.hide();

        alert('Recipe added successfully!');
      } else {
        alert('Failed to add recipe: ' + data.error);
      }
    })
    .catch((error) => {
      console.error('Error adding recipe:', error);
      alert('An unexpected error occurred.');
    });
});

// Confirm delete function
function confirmDelete(recipeId) {
  if (confirm('Are you sure you want to delete this recipe?')) {
    fetch('../php/recipe_delete.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ id: recipeId }),
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          alert('Recipe deleted successfully.');
          fetchRecipes(); // Refresh the table
        } else {
          alert('Failed to delete recipe.');
        }
      })
      .catch((error) => console.error('Error deleting recipe:', error));
  }
}

// Edit recipe function
function editRecipe(recipeId) {
  fetch(`../php/recipe_fetch.php?id=${recipeId}`)
    .then((response) => response.json())
    .then((data) => {
      document.getElementById('recipeName').value = data.title;
      document.getElementById('recipeType').value = data.type;
      document.getElementById('foodDescription').value = data.description;
      document.getElementById('prepTime').value = data.preparation_time;
      document.getElementById('cookTime').value = data.cooking_time;

      const modal = new bootstrap.Modal(document.getElementById('editRecipeModal'));
      modal.show();
    })
    .catch((error) => console.error('Error fetching recipe details:', error));
}
