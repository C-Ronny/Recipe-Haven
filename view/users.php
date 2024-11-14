<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Management</title>
    <link rel="stylesheet" href="../assets/users.css">
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
        <li><a id="on-page" href="users.php" aria-label="Users">Users</a></li>
        <li><a href="recipes.php" aria-label="Recipes">Recipes</a></li>
      </ul>
    </div>

    <nav class="menu">
      <h1>Recipe Haven</h1>
      <div class="nav-toggle">
        <ul id="nav-right-side">
          <li><a href="logIn.php" aria-label="Log In or Sign Out">Log In / Sign Out</a></li>
          <li><a href="#" aria-label="Recipes">Recipes</a></li>
          <li><a href="dashboard.php" aria-label="Account">Account</a></li>
        </ul>
      </div>
    </nav>

    <div class="content">
      <h1>Users</h1>
      <table class="content-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Domenic</td>
            <td>domenic@example.com</td>
            <td>
              <button onclick="editUser(1)">Edit</button>
              <button onclick="viewMore('Domenic', 'domenic@example.com')">View More</button>
              <button onclick="confirmDelete()">Delete</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Sally</td>
            <td>sally@example.com</td>
            <td>
              <button onclick="editUser(2)">Edit</button>
              <button onclick="viewMore('Sally', 'sally@example.com')">View More</button>
              <button onclick="confirmDelete()">Delete</button>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>Nick</td>
            <td>nick@example.com</td>
            <td>
              <button onclick="editUser(2)">Edit</button>            
              <button onclick="viewMore('Nick', 'nick@example.com')">View More</button> 
              <button onclick="confirmDelete()">Delete</button>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>Anna</td>
            <td>anna@example.com</td>
            <td>
              <button onclick="editUser(2)">Edit</button>
              <button onclick="viewMore('Anna', 'anna@example.com')">View More</button>
              <button onclick="confirmDelete()">Delete</button>
            </td>
          </tr>
          <tr>
            <td>5</td>
            <td>Chris</td>
            <td>chris@example.com</td>
            <td>
              <button onclick="editUser(2)">Edit</button>
              <button onclick="viewMore('Chris', 'chris@example.com')">View More</button>
              <button onclick="confirmDelete()">Delete</button>
            </td>
          </tr>
          <tr>
            <td>6</td>
            <td>Emily</td>
            <td>emily@example.com</td>
            <td>
              <button onclick="editUser(2)">Edit</button>
              <button onclick="viewMore('Emily', 'emily@example.com')">View More</button>
              <button onclick="confirmDelete()">Delete</button>
            </td>
          </tr>
          <tr>
            <td>7</td>
            <td>John</td>
            <td>john@example.com</td>
            <td>
              <button onclick="editUser(2)">Edit</button>
              <button onclick="viewMore('John', 'john@example.com')">View More</button>
              <button onclick="confirmDelete()">Delete</button>
            </td>
          </tr>
          <tr>
            <td>8</td>
            <td>Linda</td>
            <td>linda@example.com</td>
            <td>
              <button onclick="editUser(2)">Edit</button>
              <button onclick="viewMore('Linda', 'linda@example.com')">View More</button>
              <button onclick="confirmDelete()">Delete</button>
            </td>
          </tr>
          <tr>
            <td>9</td>
            <td>George</td>
            <td>george@example.com</td>
            <td>
              <button onclick="editUser(2)">Edit</button>
              <button onclick="viewMore('George', 'george@example.com')">View More</button>
              <button onclick="confirmDelete()">Delete</button>
            </td>
          </tr>
          <tr>
            <td>10</td>
            <td>Monica</td>
            <td>monica@example.com</td>
            <td>
              <button onclick="editUser(2)">Edit</button>
              <button onclick="viewMore('Monica', 'monica@example.com')">View More</button>
              <button onclick="confirmDelete()">Delete</button>
            </td>
          </tr>
          <tr>
            <td>11</td>
            <td>Frank</td>
            <td>frank@example.com</td>
            <td>
              <button onclick="editUser(2)">Edit</button>
              <button onclick="viewMore('Frank', 'frank@example.com')">View More</button>
              <button onclick="confirmDelete()">Delete</button>
            </td>
          </tr>
          <tr>
            <td>12</td>
            <td>Jessica</td>
            <td>jessica@example.com</td>
            <td>
              <button onclick="editUser(2)">Edit</button>
              <button onclick="viewMore('Jessica', 'jessica@example.com')">View More</button>
              <button onclick="confirmDelete()">Delete</button>
            </td>
          </tr>
          <tr>
            <td>13</td>
            <td>Michael</td>
            <td>michael@example.com</td>
            <td>
              <button onclick="editUser(2)">Edit</button>              
              <button onclick="viewMore('Micheal', 'micheal@example.com')">View More</button>
              <button onclick="confirmDelete()">Delete</button>
            </td>
          </tr>
          <tr>
            <td>14</td>
            <td>Rebecca</td>
            <td>rebecca@example.com</td>
            <td>
              <button onclick="editUser(2)">Edit</button>
              <button onclick="viewMore('Rebecca', 'rebecca@example.com')">View More</button>
              <button onclick="confirmDelete()">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Modal for editing user -->
<div id="editUserModal" class="modal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="editUserForm">
          <div class="mb-3">
            <label for="userName" class="form-label">Name</label>
            <input type="text" class="form-control" id="userName">
          </div>
          <div class="mb-3">
            <label for="userEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="userEmail">
          </div>
          <button type="submit" class="btn btn-primary w-100">Save Changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal for viewing more details -->
<div id="viewMoreModal" class="modal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">User Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><strong>Name:</strong> <span id="viewName"></span></p>
        <p><strong>Email:</strong> <span id="viewEmail"></span></p>
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


    <script>
      // Show edit user modal
      function editUser(userId) {
        // Load user data dynamically based on userId
        var editModal = new bootstrap.Modal(document.getElementById('editUserModal'));
        editModal.show();
      }

      // View More user details in a modal
      function viewMore(name, email) {
        document.getElementById("viewName").innerText = name;
        document.getElementById("viewEmail").innerText = email;
        var viewMoreModal = new bootstrap.Modal(document.getElementById('viewMoreModal'));
        viewMoreModal.show();
      }

      // Show delete confirmation
      function confirmDelete() {
        var deleteModal = new bootstrap.Modal(document.getElementById('confirmDeleteDialog'));
        deleteModal.show();
      }

      // Handle delete action
      function deleteUser() {
        alert("User deleted successfully.");
        
      }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>