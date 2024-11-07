<?php

// Establish connection to database

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'register';


$conn = new  mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
  die("Connection failed");
}else{
  // echo "Connection successful";
}
?>
