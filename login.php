<!--header & footer template-->
<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $accounts = file("users.txt", FILE_IGNORE_NEW_LINES);
        $found = false;

        foreach($accounts as $users){
            $data = explode("|", $users);
        }

        if($data[10] === $username && $data[11] === $password){
            $found = true;
            $_SESSION["user_data"] = $data;
            header("Location: welcome.php");
            exit;
        } 
        
        if(!$found){
            echo "<script>window.alert('Invalid username or password')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log In</title>
        <link rel="stylesheet" href="login.css">
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
                    <li><a href="login.php"><u>Log In</u></a></li>
                </ul>
            </nav>
        </header>

        <!--main-->
        <main>
            <form action="login.php" method="post">
                <label>Username</label>
                <input type="text" name="username"> <br>
                <label>Password</label>
                <input type="password" name="password"> <br> <!-- fixed here -->
                <input type="submit" name="login" value="LOG IN"> <br>
                
                <a href="register.php" class="btn-link">REGISTER</a>
            </form>
        </main>

        <!--footer-->
        <footer>
            <p>&copy; 2025 Copyright by Kimberly Ejon. All rigths reserved.</p>
        </footer>
    </body>
</html>