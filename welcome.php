<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Welcome Portal</title>
    <style>
    /* General Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        display: flex;
    }

    /* Sidebar Styles */
    .sidebar {
        width: 250px;
        background-color: #333;
        color: white;
        height: 100vh;
        padding: 20px;
    }

    .sidebar h2 {
        color: #5cb85c;
        font-size: 24px;
        margin-bottom: 30px;
    }

    .sidebar .nav-links {
        list-style: none;
        padding: 0;
    }

    .sidebar .nav-links li {
        margin: 15px 0;
    }

    .sidebar .nav-links a {
        color: white;
        text-decoration: none;
        font-weight: bold;
        font-size: 18px;
        transition: color 0.3s;
    }

    .sidebar .nav-links a:hover {
        color: #5cb85c;
    }

    /* Main Content Styles */
    .main-content {
        flex-grow: 1;
        padding: 20px;
    }

    .header {
        background-color: #5cb85c;
        color: white;
        padding: 10px 20px;
        text-align: center;
        font-size: 28px;
    }

    .about-section,
    .services-section,
    .contact-section {
        margin: 50px 0;
    }

    h2 {
        font-size: 30px;
        color: #5cb85c;
    }

    p {
        font-size: 18px;
        line-height: 1.6;
    }

    .footer {
        background-color: #333;
        color: white;
        padding: 20px;
        text-align: center;
        margin-top: 50px;
    }

    .footer p {
        font-size: 14px;
    }

    /* Sidebar Styles */
    .sidebar {
        width: 250px;
        background-color: #333;
        color: white;
        height: 100vh;
        padding: 20px;
        display: flex;
        flex-direction: column;
    }

    .sidebar h2 {
        color: #5cb85c;
        font-size: 24px;
        margin-bottom: 30px;
        /* Space below the heading */
        text-align: center;
    }

    .sidebar .nav-links {
        list-style: none;
        padding: 0;
    }

    .sidebar .nav-links li {
        margin: 15px 0;
    }

    .sidebar .nav-links a {
        color: white;
        text-decoration: none;
        font-weight: bold;
        font-size: 18px;
        transition: color 0.3s;
        display: block;
        padding: 10px 15px;
    }

    .sidebar .nav-links a:hover {
        color: #5cb85c;
        background-color: #444;
    }
    </style>
</head>

<body>
    <!-- Sidebar Section -->
    <div class="sidebar">
        <h2>Welcome Portal</h2>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

    <!-- Main Content Section -->
    <div class="main-content">
        <div class="header">
            Welcome, <?php echo $_SESSION['username']; ?>!
        </div>

        <!-- About Us Section -->
        <div class="about-section">
            <h2>About Us</h2>
            <p>We are a team of professionals dedicated to delivering high-quality services to our clients. Our mission
                is to provide top-notch solutions that help individuals and businesses thrive. With years of experience,
                we understand the needs of our customers and strive to exceed their expectations. We value trust,
                commitment, and excellence in everything we do.</p>
        </div>

        <!-- Services Section -->
        <div class="services-section">
            <h2>Our Services</h2>
            <p>Our services include web development, digital marketing, UI/UX design, SEO, and much more. We are
                committed to providing innovative and efficient solutions to help businesses grow in the digital age.
                Whatever your needs, our team is here to support you every step of the way.</p>
        </div>

        <!-- Contact Section -->
        <div class="contact-section">
            <h2>Contact Us</h2>
            <p>If you have any questions or want to learn more about our services, feel free to reach out to us. We are
                always happy to help and provide you with the information you need. You can contact us via email at
                support@yourcompany.com or give us a call at +123456789.</p>
        </div>

        <!-- Footer Section -->
        <div class="footer">
            <p>&copy; <?php echo date("Y"); ?> Welcome Portal. All rights reserved.</p>
            <p>Designed with ❤️ by Your Company</p>
        </div>
    </div>
</body>

</html>