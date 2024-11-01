<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Fetching from Mysql</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        *{
            padding: 7px;
            text-align: center;   
        }
        .id{
            color: red;
            font: 20px;
        }
        #table{
            width: 50%;
            margin: 0 auto;
            border: 3px solid black;
            border-collapse: collapse;
        }
        .back{
            text-align: center;
            margin-left: 25%;
            font-size: 25px;
            color: blue;
        }
    </style>
</head>
<body>

    <h1 class="id">Data Fetched From Mysql Database</h1>
    
    <?php

            $server_name = "localhost";
            $username = "root";
            $pass = "";
            $db_name = "login";

            $conn = mysqli_connect($server_name, $username, $pass, $db_name);

            if (!$conn) {
                echo "Error in connection!<br>";
            }    

            $sql = "SELECT * FROM people";
            
            if($res = mysqli_query($conn, $sql)){
                if(mysqli_num_rows($res) > 0){
                    echo "<table id =\"table\"  class=\"table table-borderless\">";
                    echo "<tr>";
                    echo "<th>Name</th>";
                    echo "<th>Email</th>";
                    echo "<th>Phone Number</th>";
                    echo "</tr>";
                    while($row = mysqli_fetch_array($res)){
                        echo "<tr>";
                        echo "<td>" . $row['namee'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['ph'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    mysqli_free_result($res);
                } else {
                    echo "No records matching your query were found.";
                }
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }
            mysqli_close($conn);
        ?>
        <br><br>
        <a href="PushingDataDb.php" class="back">Back--</a>
</body>
</html>