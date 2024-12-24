<?php
$host = "localhost";
$username = "localhost";
$password = '';
$database = "core";

$con = new mysqli($host, $username, $password);
if ($con->connect_error) {
    die("connection failed" . $conn->connect_error);
}