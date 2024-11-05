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
        if (isset($_POST['submit'])) {
            $units = $_POST['units'];

            function calculate($units) {
                $totalBill = 0.0;

                if ($units <= 50) {
                    $totalBill = $units * 3.50; // Rate for the first 50 units
                } elseif ($units <= 100) {
                    $totalBill = (50 * 3.50) + (($units - 50) * 4.50); // Rate for 51-100 units
                } elseif ($units <= 200) {
                    $totalBill = (50 * 3.50) + (50 * 4.50) + (($units - 100) * 5.50); // Rate for 101-200 units
                } else {
                    $totalBill = (50 * 3.50) + (50 * 4.50) + (100 * 5.50) + (($units - 200) * 6.50); // Rate for above 200 units
                }

                return $totalBill;
            }

            $bill = calculate($units);
            echo "<p>Total bill is: ₹$bill</p>"; // Display the total bill without formatting
        }
    ?>
</body>
</html>
