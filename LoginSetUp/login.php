<!DOCTYPE html>
<html>
<head>
    <title>Data Collection</title>
    <style>
        * {
            padding: 5px;
            box-sizing: border-box;
        }
        body {
            text-align: center;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            color: grey;
            border-radius: 15px;
            background: rgb(192, 192, 192);
            width: 420px; 
            padding: 20px;
            display: flex;
            margin-left: -240px;
            flex-direction: column;
            align-items: center; 
            justify-content: center; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .login {
            color: blue;
            font-size: 60px;
            MARGIN-TOP: -400px;
            margin-left: 30px;
        }
        .val {
            color: black;
            font-size: 24px;
            border: 1px solid #ccc;
            text-align: left;
        }
        .table {
            width: 100%;
        }
        .btn {
            background: white;
            color: black;
            font-size: 20px;
            padding: 10px 10px;
            border: none;
            border-radius: 5px; 
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 50%;
            text-align: center;
        }
        .btn:hover {
            background: #ade6e6;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 105%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 22px;
        }
    </style>
    
    <script>
        function SuccessfullAlert(){
            alert("Login Successfull!");
            window.location.href = "LoggedPage.php";
        }
        function FailedAlert(){
            alert("Login Failed!");
            window.location.href = "signup.php";
        }
    </script>
</head>
<body>
    <h1 class="login">Login</h1>
    <div class="container">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" autocomplete="off">
            <table class="table">
                <tr>
                    <th class="val">UserName:</th>
                    <td><input type="text" name="uname" placeholder="Username" required></td>
                </tr>
                <tr>
                    <th class="val">Email:</th>
                    <td><input type="email" name="email" placeholder="Email" required></td>
                </tr>
                <tr>
                    <th class="val">Password:</th>
                    <td><input type="password" name="pass" placeholder="Password" required></td>
                </tr>
                <tr>
                    <th colspan="2">
                        <input type="submit" value="Login" class="btn">
                    </th>
                </tr>
            </table>
        </form>
    </div>
    <?php
       $server_name = "localhost";
       $username = "root";
       $password = "";
       $db_name = "oglogin";

        $uname = $_POST['uname']?? '';
        $email = $_POST['email']?? '';
        $pass = $_POST['pass']?? '';

       $conn = mysqli_connect($server_name, $username, $password, $db_name);
       if(!$conn){
           echo "Error in connection!<br>";
       }
       $sql = "SELECT namee,email,pass FROM mytable
               WHERE namee = '$uname' AND email = '$email' AND pass = '$pass'";

         $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                echo "<script>SuccessfullAlert();</script>";
            }
            else{
                echo "<script>FailedAlert();</script>";
            }

        
    ?>
</body>
</html>
