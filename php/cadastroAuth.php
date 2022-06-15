<?php 

session_start();
require_once './dbConnection.php';

if (isset($_POST['inputCadEmail']) && isset($_POST['inputCadUserName']) && isset($_POST['inputCadPassword'])) {
    $emailCadInput = $_POST['inputCadEmail'];
    $userCadInput = $_POST['inputCadUserName'];
    $passwordCadInput = $_POST['inputCadPassword'];

    $inputCad = array($emailCadInput, $userCadInput, $passwordCadInput);

    $y = 1;
    $z = 0;
    for ($x = 0; $x < 3; $x++) {
        if(empty($inputCad[$x])) {
            $y += $x;
        }

        
    }
    if ($y > 0) {
        header("Location: ./cadastro.php?error=$y");
    }
}


?>