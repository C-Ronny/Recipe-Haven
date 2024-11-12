<?php
    include 'config.php';

    error_reporting(E_ALL);
    ini_set('display errors', 1);

    // check what request method is being used and specify steps accordingly
    if($_SERVER['REQUEST_METHOD']=='POST'){
        // specify what action 
        $fname = trim($_POST['fname']);
        $lname = trim($_POST['lname']);
        $email = trim($_POST['email']);
        $password = trim($_POST['psw']);
        $confirm_password = trim($_POST['psw-confirm']);

        // check if any of the fields are empty
        if(empty($fname) || empty($lname) || empty($emil) || empty($password) || empty($confirm_password)){
            echo "All fields are required";
        }
        // for register, check if the password and confirm password match
        if($password != $confirm_password){
            echo "Passwords do not match";
        }

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
            // hash the password, insert the data 
            // redirect to appropriate page
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
            



            echo "<script>window.location.href='view/recipefeed.html';</script>";
        }

















    }


?>