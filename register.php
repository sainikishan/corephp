<?php include('db.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    .container {
        width: 30%;
        margin: auto;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 50px;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    button {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    button {
        background-color: #5cb85c;
        color: white;
        border: none;
    }

    a {
        text-decoration: none;
        color: #5cb85c;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>Register</h2>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Enter Username" required>
            <input type="email" name="email" placeholder="Enter Email" required>
            <input type="password" name="password" placeholder="Enter Password" required>
            <button type="submit" name="register">Register</button>
        </form>
        <p>Already have an account? <a href="login.php">Login Here</a></p>
    </div>

    <?php
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
        if ($con->query($sql) === TRUE) {
            echo "<p style='color:green;text-align:center;'>Registration successful! <a href='login.php'>Login now</a></p>";
        } else {
            echo "<p style='color:red;text-align:center;'>Error: " . $conn->error . "</p>";
        }
    }
    ?>
</body>

</html>