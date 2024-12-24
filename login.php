<?php include('db.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <h2>Login</h2>
        <form action="" method="POST">
            <input type="email" name="email" placeholder="Enter Email" required>
            <input type="password" name="password" placeholder="Enter Password" required>
            <button type="submit" name="login">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register Here</a></p>
    </div>

    <?php
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $errors = []; // Array to store error messages

        // Check if email or password fields are empty
        if (empty($email)) {
            $errors[] = "Email field cannot be empty.";
        }
        if (empty($password)) {
            $errors[] = "Password field cannot be empty.";
        }


        if (empty($errors)) {

            $sql = "SELECT * FROM user WHERE email='$email'";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();

                if (password_verify($password, $user['password'])) {
                    session_start();
                    $_SESSION['username'] = $user['username'];
                    header("Location: welcome.php");
                    exit();
                } else {
                    $errors[] = "Incorrect password.";
                }
            } else {
                $errors[] = "No user found with this email.";
            }
        }


        if (!empty($errors)) {
            echo "<div style='color:red;text-align:center;'>";
            foreach ($errors as $error) {
                echo "<p>$error</p>";
            }
            echo "</div>";
        }
    }
    ?>

</body>

</html>