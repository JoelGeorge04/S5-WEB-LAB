<!DOCTYPE html>
<html>
    <head>
        <title>Display Data</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
                padding: 20px;
                background-color: #f7f7f7;
            }
            .result-container {
                display: inline-block;
                text-align: left;
                background-color: #f2f2f2;
                border-radius: 10px;
                padding: 20px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                width: 300px;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class="result-container">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $ph_no = $_POST['ph_no'];

                echo "<h2>Details Submitted:</h2>";
                echo "<p><strong>Name:</strong> " . $name . "</p>";
                echo "<p><strong>Email:</strong> " . $email . "</p>";
                echo "<p><strong>Phone Number:</strong> " . $ph_no . "</p>";
            } else {
                echo "<p>No data received.</p>";
            }
            ?>
        </div>
    </body>
</html>
