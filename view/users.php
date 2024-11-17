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
        <li><a href="users.php" id="on-page" aria-label="Users">Users</a></li>
        <li><a href="recipes.php" aria-label="Recipes">Recipes</a></li>
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
      </div>
    </nav>

    <div class="content">
      <h1>Users</h1>

      <table class="content-table">
        <thead>
          <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Registration Date</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>

        <tbody>
            <!-- Rows will be populated dynamically -->
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
                <label for="userName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="userName" required>
              </div>
              <div class="mb-3">
                <label for="userEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="userEmail" disabled>
              </div>
              <div class="mb-3">
                <label for="userRole" class="form-label">Role</label>
                <select class="form-control" id="userRole" required>
                  <option value="1">Admin</option>
                  <option value="2">User</option>
                </select>
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
        <p><strong>First Name:</strong> <span id="viewName"></span></p>
        <p><strong>Last Name:</strong> <span id="viewName"></span></p>
        <p><strong>Role:</strong> <span id="viewRole"></span></p>
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
    <script src="../functions/user_table.js"></script>
  </body>
</html>