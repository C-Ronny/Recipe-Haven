<?php

// Establish connection to database

// Define database server, username, password, and database name
$servername = 'localhost';
$username = 'ronelle.cudjoe';
$password = 'Ronelle-0202731402-rocu';
$dbname = 'webtech_fall2024_ronelle_cudjoe';

// Create a new MySQLi connection object using the specified credentials
$conn = new  mysqli($servername, $username, $password, $dbname);


// Check if the connection was successful
if ($conn->connect_error) {
  die("Connection failed");
} else {
  // echo "Connection successful";
}
