<!DOCTYPE html>
<html>
    <head>
        <title>File Uploading</title>
        <style>
            *{
                padding: 5px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Upload Your File Here...</h1><br>
        <form method="post" action="fileUpload.php" enctype="multipart/form-data">
            <input type="file" name="filename" required><br><br>
            <input type="submit" value="Upload">
    </body>
</html>