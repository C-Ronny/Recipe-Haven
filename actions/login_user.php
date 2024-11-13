<?php
    // include config files for database connection
    include 'config.php';

    include '../utilis/error_config.php';

    // start session
    session_start();

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $email = trim($_POST('uname'));
        $password = trim($_POST(('psw')));


        if(empty($email) || empty($password)){
            echo "Please fill in all fields";
        }

        // check if user already exists
        $query = 'SELECT user_id, `password`, fname, lname, email, `role` FROM `users` WHERE email = ?';
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $results = $stmt->get_result();

        if ($results->num_rows > 0){
            // fetch user data from the result set
            $row = $results->fetch_assoc();
            $user_id = $row['user_id'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $email = $row['email'];
            $userrole = $row['role'];
            $userpass = $row['password'];
            
            // verify password
            if(password_verify($password, $userpass)){
                //start session
                $_SESSION['user_id'] = $user_id;
                $_SESSION['email'] = $email;
                $_SESSION['userrole'] = $userrole;
            
                // redirect to appropriate page
                if($userrole == 1){
                    header('Location: view/superuser.php');
                } else {
                    header('Location: view/recipefeed.php');
                }
                exit();                
            } else {
                echo "<script>alert('Invalid login credentials');</script>";
                echo "<script>window.location.href='login.html';</script>";
            }
        
        }else{  
            echo "<script>alert('User does not exist');</script>";
            echo "<script>window.location.href='login.html';</script>";
        }
    }

?>

1 - Superuser
2 - Admin