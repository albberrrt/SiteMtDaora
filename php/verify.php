<?php 
session_start();
if (isset($_POST['inputPassword'])) {

    $passwordInput = $_POST['inputVefPassword'];

    $stmt = $conn->prepare('SELECT * FROM users WHERE userEmail= :userInput');
    $stmt->bindParam(':userInput', $_SESSION['user_Email'], PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() === 1) {
        $user = $stmt->fetch();

        if (password_verify($passwordInput, $user['userPassWord'])) {
     
        header("Location: ./account.php?editMode=true");
                    
        } else {
            header("Location: ./login.php?invalidpass = 046420511804272727260520067");
                    
        }

    }
}

?>