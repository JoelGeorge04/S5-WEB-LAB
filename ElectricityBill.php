<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Calculator</title>
</head>
<body>
    <form method="post">
        <label for="units">Units:</label>
        <input id="units" type="number" name="units" required />
        <br/><br/>
        <input type="submit" name="submit" value="Calculate Bill"/>
    </form>

    <?php
        if(isset($_POST['submit'])){
            $units = $_POST['units'];
            
            function calculate($units){
                $totalbill = 0.0;

                if($units <= 50){
                    $totalbill = $units * 3.50; // Direct rate
                }
                else if($units <= 100){
                    $totalbill = (50 * 3.50) + (($units - 50) * 4.50);
                }
                else if($units <= 200){
                    $totalbill = (50 * 3.50) + (50 * 4.50) + (($units - 100) * 5.50);
                }
                    $totalbill = (50 * 3.50) + (50 * 4.50) + (100 * 5.50) + (($units - 200) * 6.50); 
                }

                return $totalbill;
            }

            $bill = calculate($units);
            echo "<p>Total bill is $bill</p>";
        }
    ?>
</body>
</html>
