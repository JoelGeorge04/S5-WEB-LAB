<?php

    echo "Array Access using foreach:-<br><br>";
    $arr = array("Name" => "Joel George", "E-mail" => "joelgeorge4002@gmail.com", "Ph_no" => "1234567890"); //indexed array
    //print_r($arr);
    foreach($arr as $key => $value){
        echo $key . " : " . $value . "<br>";
    }

?>