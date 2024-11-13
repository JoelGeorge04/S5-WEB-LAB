<!DOCTYPE html>
<html>
<head>
    <title>Data Collection</title>
    <style>
        * {
            padding: 5px;
        }
        h1 {
            text-align: center;
            color: black;
            font-size: 50px;
        }
        span {
            color: blue;
            font-size: 45px;
        }
        h2 {
            text-align: center;
            color: brown;
            font-size: 45px;
        }
        body, html {
            height: 100%;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
        }
        .center-box {
            margin: auto;
            width: 300px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            text-align: left;
        }
        .name {
            margin: 0 0 10px;
            color: #333;
        }
        .email {
            margin: 5px 0;
            color: #333;
            font-size: 16px;
        }
        .sign-out-button {
            padding: 15px 50px;
            font-size: 16px;
            color: #fff;
            background-color: #ff4d4f;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 70px 850px 10px;
            transition: background-color 0.3s ease;
        }
        .sign-out-button:hover {
            background-color: #ff787b;
        }
    </style>
</head>
<body>
    <?php
        session_start();  // Start the session

        // Check if the user is logged in by verifying if session variables are set
        if (!isset($_SESSION['username']) || !isset($_SESSION['email'])) {
            // If not set, redirect to the login page
            header("Location: login.php");
            exit();
        } else {
            // Access session variables
            $Susername = $_SESSION['username'];
            $Semail = $_SESSION['email'];
            echo "<h1><span>$Susername</span> has logged in successfully!</h1><br>";
            echo "<h2>Welcome<br></h2>";
            echo "<div class=\"center-box\">";
            echo "<h4 class=\"name\">Name: $Susername</h4>";
            echo "<h4 class=\"email\">Email: $Semail</h4>";
            echo "</div>";
        }
    ?>

    <button class="sign-out-button" onclick="window.location.href='logout.php'">SignOut</button> <!---logout.php file which destroy the current set session variables--->
</body>
</html>
