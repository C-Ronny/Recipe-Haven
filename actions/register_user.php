<?php
    include '../db/config.php';
    
    session_start();

    include '../utilis/error_config.php';

    // check what request method is being used and specify steps accordingly
    if($_SERVER['REQUEST_METHOD']=='POST'){
        // specify what action 
        $fname = trim($_POST['fname']);
        $lname = trim($_POST['lname']);
        $email = trim($_POST['email']);
        $password = trim($_POST['psw']);
        $role = trim($_POST['role']);
        $confirm_password = trim($_POST['psw-confirm']);

        // check if any of the fields are empty
        if(empty($fname) || empty($lname) || empty($email) || empty($password) || empty($confirm_password)){
            echo "All fields are required";
        }
        // for register, check if the password and confirm password match
        else if($password != $confirm_password){
            echo "Passwords do not match";
        } else{
            // prepare a query to check if the email already exists in the database
            $query = 'SELECT email FROM Users WHERE email = ?';
            $stmt = $conn->prepare($query);
            $stmt->bind_param('s',$email);
            $stmt->execute();
            $results = $stmt->get_result();

            if ($results->num_rows>0){
                echo "<script> alert('registration failed, user already registered');</script>";
                echo "<script>window.location.href='view/register.html';</script>";
            } else{
                // if user is not already in the database, add the user details to the database 
                // hash the password
                // insert the data 
                // redirect to appropriate page 

                $hashed_password = password_hash($password, PASSWORD_BCRYPT);
                $stmt = $conn->prepare('INSERT INTO Users (fname, lname, email, `password`, `role`) VALUES (?,?,?,?,?)');
                $stmt->bind_param('sssss', $fname, $lname, $email, $hashed_password, $role);

                if($stmt->execute()){
                    echo "<script> alert('Registration successful');</script>";
                    echo "<script>window.location.href='login.html';</script>";
                }else{
                    echo "<script> alert('Registration failed');</script>";
                    echo "<script>window.location.href='register.html';</script>";
                }
            }
            $stmt -> close();
        }
    }
    $conn -> close();
?>