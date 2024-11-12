<html>
    <head>
        <style>
            .img {
                width: 300px;
                height: 300px;
                margin-top: 20px;
                margin-left: 20px;
            }
        </style>
    </head>
<body>
    <h2>Uploaded File...</h2>
    <?php

            $myFile = $_FILES['filename']['name'];                      //multidimensional associative array [''][''].
            $tempName = $_FILES['filename']['tmp_name'];
            $new_file_name = time() . "_" . $myFile;
            
            move_uploaded_file($tempName, "uploads/" . $new_file_name); //move_uploaded_file(file, destination).

                echo "File uploaded successfully.<br>";
                echo "<img class='img' src='uploads/" . $new_file_name . "'>";

    ?>
</body>
</html>
