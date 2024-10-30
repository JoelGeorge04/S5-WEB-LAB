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
            transition: 0.5s;
        }
        .btn {
            background: white;
            color: blue;
        }
        .btn:hover {
            background: white;
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="post" action="" autocomplete="off">
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

            $name = $_POST['name'];
            $email = $_POST['email'];
            $ph_no = $_POST['ph_no'];

            $conn = mysqli_connect($server_name, $username, $pass, $db_name);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            } else {
                echo "Database connected successfully!<br>";
            }

            $sql = "INSERT INTO people (namee, email, ph) VALUES ('$name', '$email', '$ph_no')";

            if (mysqli_query($conn, $sql)) {
                echo "New record added successfully!";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            mysqli_close($conn);
        
    ?>
</body>
</html>
