document.addEventListener("DOMContentLoaded", () => {
  fetchRecipes();

  document.getElementById("create").addEventListener("click", () => {
    document.getElementById("recipeForm").reset();
    document.getElementById("recipeId").value = ""; // Clear hidden ID field for new recipe
    const modal = new bootstrap.Modal(document.getElementById("recipeModal"));
    modal.show();
  });

  document.getElementById("recipeForm").addEventListener("submit", handleFormSubmit);
});

function fetchRecipes() {
  fetch("../php/recipe_functions.php")
    .then((response) => response.json())
    .then((data) => {
      const tableBody = document.querySelector(".content-table tbody");
      tableBody.innerHTML = "";

      data.forEach((recipe) => {
        const row = document.createElement("tr");

        row.innerHTML = `
          <td>${recipe.id}</td>
          <td>${recipe.title}</td>
          <td>${recipe.author}</td>
          <td>${recipe.recipe_type}</td>
          <td>${new Date(recipe.date_created).toLocaleDateString()}</td>
          <td>
            <button class="btn btn-primary btn-sm" onclick="editRecipe(${recipe.id})">Edit</button>
            <button class="btn btn-danger btn-sm" onclick="deleteRecipe(${recipe.id})">Delete</button>
          </td>
        `;

        tableBody.appendChild(row);
      });
    })
    .catch((error) => console.error("Error fetching recipes:", error));
}

function handleFormSubmit(event) {
  event.preventDefault();

  const recipeId = document.getElementById("recipeId").value;
  const formData = {
    id: recipeId ? recipeId : null,
    name: document.getElementById("recipeName").value.trim(),
    type: document.getElementById("recipeType").value,
    description: document.getElementById("description").value.trim(),
    preparation_time: parseInt(document.getElementById("prepTime").value, 10),
    cooking_time: parseInt(document.getElementById("cookTime").value, 10),
    created_by: 1, // Example ID of current user
  };

  const url = recipeId ? "../php/recipe_update.php" : "../php/recipe_add.php";

  fetch(url, {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(formData),
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        alert("Recipe saved successfully!");
        fetchRecipes();
        bootstrap.Modal.getInstance(document.getElementById("recipeModal")).hide();
      } else {
        alert("Error saving recipe: " + data.error);
      }
    })
    .catch((error) => console.error("Error saving recipe:", error));
}

function editRecipe(recipeId) {
  fetch(`../php/recipe_fetch.php?id=${recipeId}`)
    .then((response) => response.json())
    .then((data) => {
      document.getElementById("recipeId").value = data.id;
      document.getElementById("recipeName").value = data.title;
      document.getElementById("recipeType").value = data.type;
      document.getElementById("description").value = data.description;
      document.getElementById("prepTime").value = data.preparation_time;
      document.getElementById("cookTime").value = data.cooking_time;

      const modal = new bootstrap.Modal(document.getElementById("recipeModal"));
      modal.show();
    })
    .catch((error) => console.error("Error fetching recipe details:", error));
}

function deleteRecipe(recipeId) {
  if (confirm("Are you sure you want to delete this recipe?")) {
    fetch("../php/recipe_delete.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ id: recipeId }),
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          alert("Recipe deleted successfully!");
          fetchRecipes();
        } else {
          alert("Error deleting recipe: " + data.error);
        }
      })
      .catch((error) => console.error("Error deleting recipe:", error));
  }
}
