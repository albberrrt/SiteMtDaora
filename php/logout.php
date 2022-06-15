<?php
    session_start();

    unset($_SESSION['user_Id']);
    unset($_SESSION['user_Name']);
    unset($_SESSION['user_Email']);
    unset($_SESSION['user_Password']);
    unset($_SESSION['user_ProfileImg']);
    unset($_SESSION['user_Fav01']);
    unset($_SESSION['user_Fav02']);
    
    session_unset();
    session_destroy();
    header("Location: ./login.php");


?>