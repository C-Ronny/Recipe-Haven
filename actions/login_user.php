<?php
    // include config files for database connection
    include 'config.php';

    // start session
    session_start();

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $username = trim($_POST('uname'));
        $password = trim($_POST(('psw')));

        if(empty($username) || empty($password)){
            echo "Please fill in all fields";
        }

        // check if user already exists
        $query = 'SELECT * FROM users WHERE username = ?';
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $results = $stmt->get_result();

        if ($results->num_rows > 0){
            // fetch user data from the result set
            $row = $results->fetch_assoc();
            $user_id = $row['id'];
            $email = $row['email'];
            

        }
        



    }

?>