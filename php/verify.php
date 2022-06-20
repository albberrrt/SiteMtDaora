<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
include './dbConnection.php';

if (isset($_POST['inputVefPassword'])) {

    
    $passwordInput = $_POST['inputVefPassword'];

    $stmt = $conn->prepare('SELECT * FROM users WHERE userEmail= :userInput');
    $stmt->bindParam(':userInput', $_SESSION['user_Email'], PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() === 1) {
        $user = $stmt->fetch();

        if (password_verify($passwordInput, $user['userPassWord'])) {
        $userPass = $user['userPassWord'];
        $userName = $_SESSION['user_Name'];
        header("Location: ./account.php?editMode=true&passh=$userPass&pass=$passwordInput&user=$userName");
                    
        } else {
            header("Location: ./account.php?invalidpass=046420511804272727260520067&verify=true");
                    
        }

    }
}


?>