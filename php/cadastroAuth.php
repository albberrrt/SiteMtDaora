<?php 

session_start();
require_once './dbConnection.php';

$y = 2;
if (isset($_POST['inputCadEmail']) && isset($_POST['inputCadUserName']) && isset($_POST['inputCadPassword'])) {
    $emailCadInput = $_POST['inputCadEmail'];
    $userCadInput = $_POST['inputCadUserName'];
    $passwordCadInput = $_POST['inputCadPassword'];

    $inputCad = array($emailCadInput, $userCadInput, $passwordCadInput);

    for ($x = 0; $x < 3; $x++) {
        if(empty($inputCad[$x])) {
            $y++;
        }
        $y = ($y * 2) + $x;
        
    }

        
    
} else {
    header("Location: ./cadastro.php?error=$y");
}


?>