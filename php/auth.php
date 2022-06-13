<?php
    session_start();
    include './dbConnection.php';

    $error_code = 0;

if (isset($_POST['inputUserName']) && isset($_POST['inputPassword'])) {

    $userInput = $_POST['inputUserName'];
    $passwordInput = $_POST['inputPassword'];

    if (empty($userInput)) {
        header("Location: ./login.php?error=invalid_user");

    } else if (empty($passwordInput)) {
        header("Location: ./login.php?error=invalid_password");
      
    } else {
        
        $stmt = $conn->prepare('SELECT * FROM users WHERE userEmail= :userInput OR userName = :userInput');
        $stmt->bindParam(':userInput', $userInput, PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->rowCount() === 1) {
            $user = $stmt->fetch();

            $user_Id = $user['userId'];
            $user_Email = $user['userEmail'];
            $user_Name = $user['userName'];
            $user_Password = $user['userPassWord'];
            $user_ProfileImg = $user['userImg'];
            $user_Fav01 = $user['userFav01'];
            $user_Fav02 = $user['userFav02'];

            

            if($userInput === $user_Email or $userInput === $user_Name) {
                if ($user_Password === $passwordInput) {
                    $_SESSION['user_Id'] = $user_Id;
                    $_SESSION['user_Email'] = $user_Email;
                    $_SESSION['user_Name'] = $user_Name;
                    $_SESSION['user_ProfileImg'] = $user_ProfileImg;
                    $_SESSION['user_Fav01'] = $user_Fav01;
                    $_SESSION['user_Fav02'] = $user_Fav02;
                    
                    header("Location: ./home.php");
                    
                } else {
                    header("Location: ./login.php?error=Incorrect_data1");
                    
                }
            } else {
                header("Location: ./login.php?error=Incorrect_data2");
            }
        } else {
            header("Location: ./login.php?error=Incorrect_data3");
        }

    }

}

if (isset($_GET['error'])) {
    $error = $_GET['error'];
    
    if ($error == "invalid_user"){
        $error_code = 123;
    } else if ($error == "invalid_password") {
        $error_code = 124;
    }

    }

?>