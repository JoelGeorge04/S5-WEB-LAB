<!DOCTYPE html>
<html>
<head>
    <title>Data Collection</title>
    <style>
        * {
            padding: 5px;
        }
        h1{

            text-align: center;
            color: black;
            font-size: 50px;
        }
        span{
            color: blue;
            font-size: 45px;

        }
        h2{
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

        /* Style for the centered box */
        .center-box {
            margin: auto;
            width: 300px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            text-align: left;
        }   

        /* Title and content styling */
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

        $name = $_POST['namee']?? '';
        $email = $_POST['email']?? '';
        $pass = $_POST['pass']?? '';
        $cpass = $_POST['cpass']?? '';

        if ($name === '' || $email === '' || $pass === '' || $cpass === '') {
            echo "<script>alert('Please fill in all fields.');
            window.location.href='signup.php';</script>";        
        }
        else if($pass != $cpass){
            echo"<script>alert('Passwords do not match!');
            window.location.href='signup.php';</script>";
        }
        else if(strlen($pass) < 8){
            echo"<script>alert('Password must be atleast 8 characters long!');
            window.location.href='signup.php';</script>";        

        }
        
        $server_name = "localhost";
        $username = "root";
        $password = "";
        $db_name = "oglogin";

        $conn = mysqli_connect($server_name, $username, $password, $db_name);
        if(!$conn){
            echo "Error in connection!<br>";
        }
        
        $sql = "CREATE TABLE IF NOT EXISTS mytable(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            namee VARCHAR(30) NOT NULL,
            email VARCHAR(50) NOT NULL,
            pass VARCHAR(50) NOT NULL,
            cpass VARCHAR(50) NOT NULL
        )";

        if(!mysqli_query($conn, $sql)){
            echo "Error in creating table!<br>";
        }

        $sql1 = "INSERT INTO mytable(id, namee, email, pass, cpass) VALUES (NULL, '$name', '$email', '$pass', '$cpass')";

        if(!mysqli_query($conn, $sql1)){
            echo "Error in creating table!<br>";
        }
        
        mysqli_close($conn);
        echo "<h1><span>$name</span> have logged in successfully!</h1><br>";
        echo  "<h2>Welcome<br></h2>";
        echo "<div class=\"center-box\">";
        echo "<h4 class=\"name\">Name :$name</h4>";
        echo "<h4 class=\"email\">Email :$email</h4>";
        echo "</div>";
    ?>
    <button class="sign-out-button" onclick="window.location.href='login.php'">Sign Out</button>
    
    
        
</body>
</html>