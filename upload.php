<?php
// Database connection settings
$servername = "localhost";
$username = "root"; // Change to your DB username
$password = ""; // Change to your DB password
$dbname = "dietdata"; // Change to your database name

// Create connection to MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form was submitted
if (isset($_POST['submit'])) {
    // Check if file was uploaded
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $file_name = $_FILES['file']['name'];
        $file_tmp_name = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];

        // Set upload directory (relative path)
        $upload_dir = "uploads/";
        $upload_file = $upload_dir . basename($file_name);

        // Check if file already exists
        if (file_exists($upload_file)) {
            echo "Sorry, file already exists.";
        } else {
            // Try to move the uploaded file to the server
            if (move_uploaded_file($file_tmp_name, $upload_file)) {
                // Insert file information into the database
                $sql = "INSERT INTO uploads (file_name, file_path) VALUES ('$file_name', '$upload_file')";

                // Execute the query
                if ($conn->query($sql) === TRUE) {
                    echo "File uploaded and details saved to the database successfully!";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "No file uploaded or an error occurred.";
    }
}

// Close the database connection
$conn->close();
