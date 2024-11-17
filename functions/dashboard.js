document.addEventListener("DOMContentLoaded", function () {
    // Fetch data from the server
    fetch('../db/data_fetch.php')
    .then(response => response.json())
    .then(data => {
        // Update total users
        const totalUsersElement = document.getElementById('total_users');
        totalUsersElement.textContent = data.totalUsers;

        // Update total recipes
        const totalRecipesElement = document.getElementById('total_recipes');
        totalRecipesElement.textContent = data.totalRecipes;

        // Update top 5 users
        const topUsersContainer = document.querySelector('.chart');
        topUsersContainer.innerHTML = ''; // Clear existing bars

        data.topUsers.forEach(user => {
            // Create bar for each user
            const barContainer = document.createElement('div');
            barContainer.className = 'bar2';
            barContainer.style.setProperty('--bar-height', `${user.recipes * 10}%`);

            const label = document.createElement('div');
            label.className = 'label';
            label.textContent = `${user.name} (${user.recipes})`;

            barContainer.appendChild(label);
            topUsersContainer.appendChild(barContainer);
        });
    })
    .catch(error => console.error('Error fetching data:', error));
});
