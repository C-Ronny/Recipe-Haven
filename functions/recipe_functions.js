document.addEventListener("DOMContentLoaded", function () {
    // Fetch recipes from the server
    fetch('../db/recipe_functions.php')
        .then(response => response.json())
        .then(data => {
            const tableBody = document.querySelector('.content-table tbody');

            // Clear existing rows
            tableBody.innerHTML = '';

            // Populate the table with recipe data
            data.forEach(recipe => {
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

                // Append the row to the table body
                tableBody.appendChild(row);
            });
        })
        .catch(error => console.error('Error fetching recipes:', error));
});

// Confirm delete function
function confirmDelete(recipeId) {
    if (confirm('Are you sure you want to delete this recipe?')) {
        fetch('../php/recipe_delete.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ id: recipeId }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Recipe deleted successfully.');
                location.reload();
            } else {
                alert('Failed to delete recipe.');
            }
        })
        .catch(error => console.error('Error deleting recipe:', error));
    }
}

// Edit recipe function
function editRecipe(recipeId) {
    // Logic to fetch and populate the modal form for editing
    fetch(`../php/recipe_fetch.php?id=${recipeId}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('recipeName').value = data.title;
            document.getElementById('ingredientOrigin').value = data.origin;
            // Populate other fields similarly

            var modal = new bootstrap.Modal(document.getElementById('editRecipeModal'));
            modal.show();
        })
        .catch(error => console.error('Error fetching recipe details:', error));
}







////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



// Mock data for the recipes (In a real application, this would come from a server or database)
const recipes = [
  {
    id: 7,
    name: "Chicken Sandwich",
    image: "",
    ingredientOrigin: "USA",
    ingredientNames: "Chicken, Bread, Lettuce, Mayo",
    nutritionalValue: "High protein, low carb",
    allergenInfo: "Contains gluten, dairy",
    shelfLife: "2 days in fridge",
    quantity: 2,
    unit: "sandwiches",
    prepTime: 15,
    cookTime: 10,
    servingSize: "1 sandwich",
    foodDescription: "A delicious and easy-to-make sandwich.",
    calories: 300,
    foodOrigin: "American",
    instructions: "1. Cook the chicken. 2. Toast the bread. 3. Assemble sandwich."
  }
];

function editUser(recipeId) {
  const recipe = recipes.find(r => r.id === recipeId);

  if (recipe) {
    document.getElementById('recipeName').value = recipe.name;
    document.getElementById('ingredientOrigin').value = recipe.ingredientOrigin;
    document.getElementById('ingredientNames').value = recipe.ingredientNames;
    document.getElementById('nutritionalValue').value = recipe.nutritionalValue;
    document.getElementById('allergenInfo').value = recipe.allergenInfo;
    document.getElementById('shelfLife').value = recipe.shelfLife;
    document.getElementById('quantity').value = recipe.quantity;
    document.getElementById('unit').value = recipe.unit;
    document.getElementById('prepTime').value = recipe.prepTime;
    document.getElementById('cookTime').value = recipe.cookTime;
    document.getElementById('servingSize').value = recipe.servingSize;
    document.getElementById('foodDescription').value = recipe.foodDescription;
    document.getElementById('calories').value = recipe.calories;
    document.getElementById('foodOrigin').value = recipe.foodOrigin;
    document.getElementById('instructions').value = recipe.instructions;
    
  
    var modal = new bootstrap.Modal(document.getElementById('editRecipeModal'));
    modal.show();
  }
}



function confirmDelete() {
  var deleteModal = new bootstrap.Modal(document.getElementById('confirmDeleteDialog'));
  deleteModal.show();
}


function deleteUser() {
  alert("User deleted successfully.");
  
}


function editRecipe(userId) {
  
  var editModal = new bootstrap.Modal(document.getElementById('editUserModal'));
  editModal.show();
}