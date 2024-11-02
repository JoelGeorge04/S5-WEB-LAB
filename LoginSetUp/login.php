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
            background-color: black; 
        }
        .container {
            color: grey;
            border-radius: 15px;
            background: rgb(192, 192, 192);
            width: 25%; /* Specify a width for the div */
            margin: 0 auto; /* Centers it horizontally */  
        }
        .h1{

            color: white;
            font-size: 30px;
        }
        .val{
            color: black;
            font-size: 20px;
        }
        .btn{
            background: white;
            color: black;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1 class="h1">Login</h1>
    <div class="container">
        <form method="post" action=" " autocomplete="off">
            <table class="table">
                <tr><th class="val">UserName:</th><td><input type="text" name="uname" placeholder="Username" required></td></tr>
                <tr><th class="val">Email:</th><td><input type="email" name="email" placeholder="Email"required></td></tr>
                <tr><th class="val">Password:</th><td><input type="password" name="pass" placeholder="Password" required></td></tr>
                <tr><th colspan="2"><input type="submit" value="Login" class="btn"></th></tr>
            </table>
        </form>
    </div>
    
  
    

</body>
</html>
