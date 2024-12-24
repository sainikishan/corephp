<?php include('db.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>

<body>
    <h1>Create User</h1>
    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br><br>

        <label for="age">Age:</label>
        <input type="number" name="age" required>
        <br><br>

        <button type="submit" name="submit">Create</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        $sql = "INSERT INTO creat (name, email, age) VALUES ('$name', '$email', $age)";
        $result = mysqli_query($con, $sql);
        if ($con->query($sql) === TRUE) {
            // echo "User created successfully!";
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $con->close();
    ?>
</body>

</html>