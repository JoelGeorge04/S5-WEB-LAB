<!DOCTYPE html>
<html>
    <head>
        <style>
            *{
                text-align: center;
                padding: 10px;
                font-size: 20px;
            }
        </style>
    </head>
    <body>
    Enter your CheckBox Choice:<br><br>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
                1.<input type="checkbox" name="box[]" value="1">
                2.<input type="checkbox" name="box[]" value="2">
                3.<input type="checkbox" name="box[]" value="3">
                4.<input type="checkbox" name="box[]" value="4"><br><br>
                <input type="submit" name="boxes" value="Go!"><br><br>
        </form>
    </body>
</html>
<?php 
    if(isset($_POST['boxes']))
    {
        $ValueOfNum = $_POST['box'] ?? '';
        echo "Your choice is : ";
        //print_r($ValueOfNum);     here the choices are received as Array!(Indexed Array)
        if(isset($valueOfNum))
        {
            foreach($ValueOfNum as $key => $val)
            {
                    echo $val.", ";
            }
        }
        else{
            echo "No Choice :(";
        }
    }

?>