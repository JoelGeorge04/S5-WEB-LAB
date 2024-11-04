<?php

    session_start();

    $_SESSION['name'] = "Joel George";   //session data's stored in the server.
    $_SESSION['email'] = "joelgeorge4002@gmail.com";
    
    //unset($_SESSION['email']);  to remove a particular session data.

    var_dump($_SESSION);    //session data's stored in array-->
                            //Ex : array(2) { ["name"]=> string(11) "Joel George" ["email"]=> string(24) "joelgeorge4002@gmail.com" }
?>