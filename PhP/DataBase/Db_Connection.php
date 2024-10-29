<?php

    $server_name = "localhost";
    $username = "root";
    $pass = "";
    $db_name = "login";

    $conn = mysqli_connect($server_name, $username, $pass, $db_name);

    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "Connected successfully!";
    }

?>