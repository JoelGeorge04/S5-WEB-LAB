<?php

    session_start();

    //unset($_SESSION['name']);    session_unset() is used to free all session variables currently registered.
    //var_dump($_SESSION);    
    
    session_destroy();  //session_destroy() is used to destroy all of the data associated with the current session.
    var_dump($_SESSION);    //Ex : array(0) { }

?>