<!DOCTYPE html>
<html>
    <head>
        <title>Data Collection</title>
        <style>
            * {
                padding: 5px;
                box-sizing: border-box;
            }
            body {
                text-align: center; 
                font-family: Arial, sans-serif;
            }
            .container {
                color: grey;
                border-radius: 5px;
                background: lightblue;
                width: 25%;
                margin: 0 auto;
                padding: 20px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }
            .container:hover {
                background: pink;
                transition: 0.5s;
            }
            .btn {
                background: white;
                color: blue;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                transition: 0.3s;
            }
            .btn:hover {
                color: red;
            }
            table {
                width: 100%;
                margin: 0 auto;
            }
            th, td {
                text-align: left;
                padding: 8px;
            }
            th {
                color: #333;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <form method="post" action="DetailsFetched.php" autocomplete="off">  
                <table>
                    <tr>
                        <th><label for="name">Name:</label></th>
                        <td><input type="text" id="name" name="name" required></td>
                    </tr>
                    <tr>
                        <th><label for="email">Email:</label></th>
                        <td><input type="email" id="email" name="email" required></td>
                    </tr>
                    <tr>
                        <th><label for="ph_no">Phone Number:</label></th>
                        <td><input type="number" id="ph_no" name="ph_no" required></td>
                    </tr>
                    <tr>
                        <th></th><th colspan="2"><input type="submit" value="Go!" class="btn"></th>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
