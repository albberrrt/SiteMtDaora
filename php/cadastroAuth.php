<?php 

session_start();
require_once './dbConnection.php';

$y = 2;
$cadProgress = 1;
$cadComplete = false;
if (isset($_POST['inputCadEmail']) && isset($_POST['inputCadUserName']) && isset($_POST['inputCadPassword'])) {
    $emailCadInput = $_POST['inputCadEmail'];
    $userCadInput = $_POST['inputCadUserName'];
    $passwordCadInput = $_POST['inputCadPassword'];

    $inputCad = array($emailCadInput, $userCadInput, $passwordCadInput);
    $stmt = $conn->prepare('SELECT * FROM users WHERE userEmail= :userEmail');
    $stmt->bindParam(':userEmail', $emailCadInput, PDO::PARAM_STR);
    $stmt->execute();

    $userSL = $stmt->fetch();

    for ($x = 0; $x < 3; $x++) {
        if(!empty($inputCad[$x])) {
            $y++;
        }
        $y = ($y * 2) + $x;

        if($x == 2 && $y != 34) {
                header("Location: ./cadastro.php?error=$y&userName=$userCadInput&email=$emailCadInput");
        } else {
            if ($userSL) {
                header("Location: ./cadastro.php?error=26&userName=$userCadInput&email=$emailCadInput&emailalreadyexists=true");
            } else {
            header("Location: ./cadastro.php?cadProgress=2&userName=$userCadInput&email=$emailCadInput&pass=$passwordCadInput");
            }
        }
        
    }
}
?>