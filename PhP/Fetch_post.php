<!DOCTYPE html>
<html>
    <head>
        <title>Data Collection</title>
        <style>
            * {
                padding: 5px;
            }
            body{
                text-align: center; 
            }
            .container{
                color:gery;
                border-radius: 5px;
                background: lightblue;
                width: 25%; /* Specify a width for the div */
                margin: 0 auto; /* Centers it horizontally */  
            }
            .container:hover{
                background: pink;
                transition: 0.5s;
            }
            .btn{
                background: white;
                color: blue;
            }
            .btn:hover{
                background: white;
                color: red;
            }
        </style>
    </head>
    <body>
        <div class="container">
        <table class="table">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"s autocomplete="off">  
                <tr><th>Name:</th> <td><input type="text" name="name" required></td></tr>
                <tr><th>Email: </th><td><input type="email" name="email" required></td></tr>
                <tr><th>Phone Number: </th><td><input type="number" name="ph_no" required></td></tr>
                <tr><th colspan="2"><input type="submit" value="Go!" class="btn"></th></tr>
            </form>
        </table>
        </div>
        <br><br>
            <?php   
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    echo "Details:<br><br>";
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $ph_no = $_POST['ph_no'];
                    echo "Name :  " . $name."<br><br>";

                    if($name == "Joel George" || $name == "JOEL GEORGE" || $name == "joel george"){
                        echo "<span>  </span>You are great!<br><br>";
                    }
                    echo "Email :  " . $email . "<br><br>";
                    if(strlen($ph_no)<10){
                        echo "Invalid Phone Number!";
                    }
                    else{
                        echo "Phone Number :  " . $ph_no;
                    }
                }
            ?>
    </body>
</html>