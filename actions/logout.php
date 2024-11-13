<?php
    // Start session
    session_start();

    // Check if the user is already logged in
    if (isset($_SESSION['user_id'])) {
        // Unset all session variables
        $_SESSION = [];

        // Destroy the session
        session_destroy();

        // Redirect to the login page
        header('Location: ../login.html');
        exit();
    } else {
        // If no session exists, redirect to the login page
        header('Location: ../login.html');
        exit();
    }
?>
