<!DOCTYPE html>
<html>
    <head>
        <title>Data Collection</title>
        <style>
            * {
                padding: 5px;
                text-align: center;
            }
        </style>
    </head>
    <body>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"s autocomplete="off">  
                Name: <input type="text" name="name" required><br><br>
                Email: <input type="email" name="email" required><br><br>
                Phone Number: <input type="number" name="ph_no" required><br><br>
                <input type="submit" value="Go!"><br><br><br>
            </form>
            
            <?php   
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    echo "Details:<br><br>";
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $ph_no = $_POST['ph_no'];
                    echo "Name: " . $name . "<br><br>";
                    echo "Email: " . $email . "<br><br>";
                    echo "Phone Number: " . $ph_no;
                }
            ?>
    </body>
</html>
