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











    }

    















?>