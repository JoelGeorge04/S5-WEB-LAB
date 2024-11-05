<!DOCTYPE html>
<html>
<head>
    <title>Data Collection</title>
    <style>
        * {
            padding: 5px;
        }
        body {
            text-align: center; 
        }
        .container {
            color: grey;
            border-radius: 5px;
            background: lightblue;
            width: 25%; /* Specify a width for the div */
            margin: 0 auto; /* Centers it horizontally */  
        }
        .container:hover {
            background: pink;
        }
        .btn {
            background: white;
            color: blue;
        }
        .btn:hover {
            background: white;
            color: red;
        }
        .h1{
            color: blue;
        }
        .click{
            color: blue;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1 class="h1">Login</h1>
    <div class="container">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" autocomplete="off">
            <table class="table">
                <tr><th>Name:</th><td><input type="text" name="name" required></td></tr>
                <tr><th>Email:</th><td><input type="email" name="email" required></td></tr>
                <tr><th>Phone Number:</th><td><input type="number" name="ph_no" required></td></tr>
                <tr><th colspan="2"><input type="submit" value="Go!" class="btn"></th></tr>
            </table>
        </form>
    </div>
    
    <?php
            $server_name = "localhost";
            $username = "root";
            $pass = "";
            $db_name = "login";

            $name = $_POST['name']?? '';    //?? operator in PHP is called the null coalescing operator
            $email = $_POST['email']?? '';
            $ph_no = $_POST['ph_no']?? '';

                if ($name === '' || $email === '' || $ph_no === '') {
                    echo "Please fill in all fields.<br><br>";
                }
                
                $conn = mysqli_connect($server_name, $username, $pass, $db_name);

                if (!$conn) {
                    echo"Database connected successfully!<br>";
                } 
                $sql = "INSERT INTO people (namee, email, ph) VALUES ('$name', '$email', '$ph_no')";

                if (!mysqli_query($conn, $sql)) {
                    echo "Error in adding New record!";
                }   

                mysqli_close($conn);
            
        
    ?>
    <br><br>
    <a href="FetchingDataDb.php" class="click">Click to see the Details--</a>

</body>
</html>
