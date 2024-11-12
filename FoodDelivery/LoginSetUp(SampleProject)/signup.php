<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['namee'] ?? '';
            $email = $_POST['email'] ?? '';
            $pass = $_POST['pass'] ?? '';
            $cpass = $_POST['cpass'] ?? '';
            
            $server_name = "localhost";
            $username = "root";
            $password = "";
            $db_name = "login";

            $conn = mysqli_connect($server_name, $username, $password, $db_name);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            $sql = "CREATE TABLE IF NOT EXISTS mytable (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                namee VARCHAR(30) NOT NULL,
                email VARCHAR(50) NOT NULL,
                pass VARCHAR(50) NOT NULL,
                cpass VARCHAR(50) NOT NULL
            )";

            if (mysqli_query($conn, $sql)) {
                $sql1 = "INSERT INTO mytable (namee, email, pass, cpass) VALUES ('$name', '$email', '$pass', '$cpass')";

                 // Redirect to login page if registration is successful
                 header("Location: login.php");
                 exit;

                if (!mysqli_query($conn, $sql1)) {
                    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
                }
            } else {
                echo "Error creating table: " . mysqli_error($conn);
            }

            mysqli_close($conn);
        }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #eee;
        }
        .img {
            width: 75%;
            height: 75%;
        }
        .txt {
            color: black;
            font-size: 20px;
        }
        .para {
            color: black;
            font-size: 17px;
            margin: 10px;
        }
    </style>
    <script>
        function validateForm() {
            const name = document.getElementById("form3Example1c").value;
            const email = document.getElementById("form3Example3c").value;
            const password = document.getElementById("form3Example4c").value;
            const confirmPassword = document.getElementById("form3Example4cd").value;
            let flag = true;

            if (name === "" || email === "" || password === "" || confirmPassword === "") {
                alert("All fields must be filled out.");
                flag = false;
            }

            if (password !== confirmPassword) {
                alert("Passwords do not match.");
                flag = false;
            }
            if(flag == true){
                alert("Registration Successfull!");
            }
            return true;
        }
    </script>
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <h1>Welcome</h1>
    </header>

    <section class="vh-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                                    <form class="mx-1 mx-md-4" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateForm()">
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" name="namee" id="form3Example1c" class="form-control" placeholder="Name" required />
                                                <label class="txt" for="form3Example1c">Name</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" name="email" id="form3Example3c" class="form-control" placeholder="Email" required />
                                                <label class="txt" for="form3Example3c">Email</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" name="pass" id="form3Example4c" class="form-control" placeholder="Password" required />
                                                <label class="txt" for="form3Example4c">Password</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4cd" name="cpass" class="form-control" placeholder="Confirm Password" required />
                                                <label class="txt" for="form3Example4cd">Repeat password</label>
                                            </div>
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" required />
                                            <label class="form-check-label" for="form2Example3">
                                                I agree to all statements in <a href="demo.html">Terms of Service</a>
                                            </label>
                                        </div>

                                        <div class="d-flex flex-column justify-content-center align-items-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg mb-3">Register</button>
                                            <p class="para">If you're not new...</p>
                                            <button type="button" class="btn btn-secondary btn-lg" onclick="window.location.href='login.php'">Login</button>
                                        </div>
                                    </form>
                                </div>  
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <img src="needed.jpg" class="img" alt="loading.." >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
</body>
</html>
