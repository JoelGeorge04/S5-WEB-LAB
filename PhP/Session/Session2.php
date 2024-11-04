<?php

   session_start();

   $username = $_SESSION['name'];   //checkpt#023: passing data through session is similar to `SharedPreferences` in Android!
   echo "Welcome ". $username;     //Ex : Welcome Joel George


?>