document.addEventListener("DOMContentLoaded", function () {
    // Fetch user data from the server
    fetch('../db/user_table_details_fetch.php')
        .then(response => response.json())
        .then(data => {
            const tableBody = document.querySelector('.content-table tbody');

            // Clear existing rows
            tableBody.innerHTML = '';

            // Populate the table with user data
            data.forEach(user => {
                const row = document.createElement('tr');

                // Create table cells
                const fullNameCell = document.createElement('td');
                fullNameCell.textContent = user.fullname;

                const emailCell = document.createElement('td');
                emailCell.textContent = user.email;

                const roleCell = document.createElement('td');
                roleCell.textContent = user.role;

                const registrationDateCell = document.createElement('td');
                registrationDateCell.textContent = new Date(user.created_at).toLocaleDateString();

                // Append cells to the row
                row.appendChild(fullNameCell);
                row.appendChild(emailCell);
                row.appendChild(roleCell);
                row.appendChild(registrationDateCell);

                // Append the row to the table body
                tableBody.appendChild(row);
            });
        })
        .catch(error => console.error('Error fetching user data:', error));
});
