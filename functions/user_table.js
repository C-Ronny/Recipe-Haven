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

                ////////////////////////////////////////////////////////////////////////////////////
                // const edit = document.createElement('td');
                // edit.textContent = 'Edit';
                // edit.onclick = "edituser(1)";
                

                // const del = document.createElement('td');
                // del.textContent = 'Delete';
                // del.onclick = "confirmDelete()";

                
                ////////////////////////////////////////////////////////////////////////////////////
                ////////////////////////////////////////////////////////////////////////////////////
                const edit = document.createElement('td');
                const editButton = document.createElement('button');
                editButton.textContent = 'Edit';
                editButton.onclick = function() { editUser(1); }; // Attach function properly
                edit.appendChild(editButton);

                const del = document.createElement('td');
                const delButton = document.createElement('button');
                delButton.textContent = 'Delete';
                delButton.onclick = function() { confirmDelete(); }; // Attach function properly
                del.appendChild(delButton);
                ////////////////////////////////////////////////////////////////////////////////////
                ////////////////////////////////////////////////////////////////////////////////////



                
                ////////////////////////////////////////////////////////////////////////////////////

                // Append cells to the row
                row.appendChild(fullNameCell);
                row.appendChild(emailCell);
                row.appendChild(roleCell);
                row.appendChild(registrationDateCell);
                
                //////////////////////////////////////////
                row.appendChild(edit);
                row.appendChild(del);
                //////////////////////////////////////////

                // Append the row to the table body
                tableBody.appendChild(row);
            });
        })
        .catch(error => console.error('Error fetching user data:', error));
});


// Delete Button
const deleteBtn = document.createElement("button");
deleteBtn.textContent = "Delete Task";
deleteBtn.className = 'delete-btn';
deleteBtn.addEventListener('click', (e) => {
    e.stopPropagation(); // 
    taskItem.remove();
    delete_task(taskItem.getAttribute('task-id'));
});
taskItem.appendChild(deleteBtn);