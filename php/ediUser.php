<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
include './dbConnection.php';

if(isset($_POST['inputEdiUserName']) && isset($_POST['inputEdiEmail'])) {
    $userNameInput = $_POST['inputEdiUserName'];
    $userEmailInput = $_POST['inputEdiEmail'];
    $userBdId = $_SESSION['user_Id'];

    if(isset($_POST['selectEdiFav01'])) {
        $userFav01 = $_POST['selectEdiFav01'];
    } else {
        $userFav01 = $_SESSION['user_Fav01'];
    }
    if(isset($_POST['selectEdiFav02'])) {
        $userFav02 = $_POST['selectEdiFav02'];
    } else {
        $userFav02 = $_SESSION['user_Fav02'];
    }
    if(isset($_POST['inputEdiPassword'])){
        $userPassInput = $_POST['inputEdiPassword'];
        $userPass = password_hash($userPassInput, PASSWORD_DEFAULT);

        $passChange = true;
    } else {

        $passChange = false;
        
    }

    if($passChange == true) {
    $stmt = "UPDATE `users` SET `userName` = :userName, `userEmail` = :userEmail, `userPassWord` = :userPassword, `userFav01` = :userFav01, `userFav02` = :userFav02 WHERE `users`.`userId` = :userId";
    $insrt = $conn->prepare($stmt);
    $insrt->bindParam(':userName', $userNameInput, PDO::PARAM_STR);
    $insrt->bindParam(':userEmail', $userEmailInput, PDO::PARAM_STR);
    $insrt->bindParam(':userPassword', $userPass, PDO::PARAM_STR);
    $insrt->bindParam(':userFav01', $userFav01, PDO::PARAM_STR);
    $insrt->bindParam(':userFav02', $userFav02, PDO::PARAM_STR);
    $insrt->bindParam(':userId', $userBdId, PDO::PARAM_STR);
    $insrt->execute();

    } else {
        $stmt = "UPDATE `users` SET `userName` = :userName, `userEmail` = :userEmail, `userFav01` = :userFav01, `userFav02` = :userFav02 WHERE `users`.`userId` = :userId";
    $insrt = $conn->prepare($stmt);
    $insrt->bindParam(':userName', $userNameInput, PDO::PARAM_STR);
    $insrt->bindParam(':userEmail', $userEmailInput, PDO::PARAM_STR);
    $insrt->bindParam(':userFav01', $userFav01, PDO::PARAM_STR);
    $insrt->bindParam(':userFav02', $userFav02, PDO::PARAM_STR);
    $insrt->bindParam(':userId', $userBdId, PDO::PARAM_STR);
    $insrt->execute();

    }

    $_SESSION['user_Email'] = $userEmailInput;
    $_SESSION['user_Name'] = $userNameInput;
    $_SESSION['user_Fav01'] = $userFav01;
    $_SESSION['user_Fav02'] = $userFav02;

    header("Location: ./account.php");
} else {
    header("Location: ./pagenotfound.php?error=404");
}
?>