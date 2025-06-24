<?php
session_start();

    if (!isset($_SESSION['username']) || !isset($_SESSION['user_data'])) {
        header("Location: login.php");
        exit;
    }

    $username = htmlspecialchars($_SESSION['username']);
    $user = $_SESSION['user_data'];

    $fields = [
        'fullname', 'gender', 'dob', 'phone', 'email',
        'street', 'city', 'province', 'zip', 'country', 'username' 
    ];

    foreach ($fields as $field) {
        if (!isset($user[$field])) {
            $user[$field] = '';
        }
    }
?>

<!--header & footer template-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="style.css">


        <style>
            .form-container {
            width: 50%;
            margin: 60px auto;
            background-color: #fff0f5;
            padding: 20px;
            border: 2px solid #ff99cc;
            border-radius: 10px;
            box-shadow: 2px 2px 10px #ffb3d9;
            margin-bottom: 70px;
            margin-top: 40px;
        }
        </style>
    </head>
    <body>
        <!--header-->
        <header>
            <nav class="navbar">
                <div class="header-text">
                    <p>Kerin's Creations</p>
                </div>
                <ul class="nav-tabs">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="index.php">Log Out</a></li>
                </ul>
            </nav>
        </header>

        <!--main-->
            <h1 style="
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 40px;
            color: #1a1a1a;
            text-align: center;
            margin-top: 100px;
            margin-bottom: 50px;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.1);
            letter-spacing: 1.5px;
            background: linear-gradient(90deg,rgb(230, 73, 206),rgb(252, 169, 227));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            ">
            HELLO, WELCOME TO MY PAGE!
            </h1>
    
       <div class="form-container">
            <h2>User Profile</h2>
            <div class="profile-row"><strong>Full Name: </strong><span><?= htmlspecialchars($user[0] ?? '') ?></span></div>
            <div class="profile-row"><strong>Gender: </strong><span><?= htmlspecialchars($user[1] ?? '') ?></span></div>
            <div class="profile-row"><strong>Date of Birth: </strong><span><?= htmlspecialchars($user[2] ?? '') ?></span></div>
            <div class="profile-row"><strong>Phone: </strong><span><?= htmlspecialchars($user[3] ?? '') ?></span></div>
            <div class="profile-row"><strong>Email: </strong><span><?= htmlspecialchars($user[4] ?? '') ?></span></div>
            <div class="profile-row"><strong>Street: </strong><span><?= htmlspecialchars($user[5] ?? '') ?></span></div>
            <div class="profile-row"><strong>City: </strong><span><?= htmlspecialchars($user[6] ?? '') ?></span></div>
            <div class="profile-row"><strong>Province/State: </strong><span><?= htmlspecialchars($user[7] ?? '') ?></span></div>
            <div class="profile-row"><strong>Zip Code: </strong><span><?= htmlspecialchars($user[8] ?? '') ?></span></div>
            <div class="profile-row"><strong>Country: </strong><span><?= htmlspecialchars($user[9] ?? '') ?></span></div>
            <div class="profile-row"><strong>Username: </strong><span><?= htmlspecialchars($user[10] ?? '') ?></span></div>
        </div>

        <!--footer-->
        <footer>
            <p>&copy; 2025 Copyright by Kimberly Ejon. All rigths reserved.</p>
        </footer>
    </body>
</html>