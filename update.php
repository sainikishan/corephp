<?php include('db.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>

<body>
    <h1>Update User</h1>

    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM creat WHERE id = $id";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    ?>

    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $userId; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
        <br><br>

        <label for="age">Age:</label>
        <input type="number" name="age" value="<?php echo $row['age']; ?>" required>
        <br><br>

        <button type="submit" name="update">Update</button>
    </form>

    <?php
    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        $sql = "UPDATE creat SET name='$name', email='$email', age=$age WHERE id=$id";
        if ($con->query($sql) === TRUE) {
            header("Location: index.php");
            exit();

            // echo "User updated successfully!";
        } else {
            echo "Error: " . $con->error;
        }
    }
    ?>
</body>

</html>