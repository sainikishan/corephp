<?php include('db.php');

$id = $_GET['id'];
$sql = "DELETE FROM creat WHERE id = $id";

if ($con->query($sql) === TRUE) {
    // echo "User deleted successfully!";
    header("Location: index.php"); // Redirect to the users list
    exit();
} else {
    echo "Error: " . $con->error;
}