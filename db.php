<?php
$host = 'localhost'; // Hostname
$username = 'root';  // Database username
$password = '';      // Database password
$database = 'core'; // Replace with your actual database name

// Create connection
$con = new mysqli($host, $username, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}