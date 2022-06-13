<?php

if (isset($_POST['inputUserName']) && isset($_POST['inputPassword'])) {

    $user = $_POST['inputUserName'];
    $password = $_POST['inputPassword'];

    if (empty($user)) {
        header("Location: ./login.php?error=invalid_user");

    } else if (empty($password)) {
        header("Location: ./login.php?error=invalid_password");
        
    } else {
        header("Location: ./auth.php");
        echo "AI SIM";
    }

}

?>