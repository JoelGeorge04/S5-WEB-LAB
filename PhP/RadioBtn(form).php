<!DOCTYPE html>
<html>
<head>
        <style>
            *{
                text-align: center;
                padding: 8px;
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        Enter your Radio Button Choice:<br><br>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            1.<input type="radio" name="nums" value="1">
            2.<input type="radio" name="nums" value="2">
            3.<input type="radio" name="nums" value="3">
            4.<input type="radio" name="nums" value="4"><br><br>
            <input type="submit" name="submit"value="Done!"><br><br>
        </form>
    </body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        echo "Your Choice is : ";
        if(isset($_POST['nums']))
        {    
            $valueOfNum = $_POST['nums'];
            echo $valueOfNum;
        }
        else
        {
            echo "No Choice :(";

        }
    }

?>