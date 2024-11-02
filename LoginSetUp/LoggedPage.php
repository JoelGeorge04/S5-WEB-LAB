<?php

    $name = $_POST['namee']?? '';
    $email = $_POST['email']?? '';
    $pass = $_POST['pass']?? '';
    $cpass = $_POST['cpass']?? '';

    if ($name === '' || $email === '' || $pass === '' || $cpass === '') {
        echo "Please fill in all fields.<br><br>";
    }
    else if($pass != $cpass){
        echo"Passwords do not match!";
    }
    else if(strlen($pass) < 8){
        echo"Password must be atleast 8 characters long!";
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

?>