<?php 
    session_start();
    include("./dbConnection.php");
    if(isset($_GET['userName']) && isset($_GET['email']) && isset($_GET['pass']) && isset($_GET['complete']) == true) {
        $userNameGET = $_GET['userName'];
        $userEmailGET = $_GET['email'];
        $userPasswordGET = $_GET['pass'];
        $userCadFav01 = $_POST['selectFav01'];
        $userCadFav02 = $_POST['selectFav02'];
        $userProfileImage = "../img/profileImage/default.jpg";

        if ($userCadFav01 == $userCadFav02){
            header("Location: ./cadastro.php?cadProgress=2&error=256&userName=$userNameGET&email=$userEmailGET&pass=$userPasswordGET");
        } else {
            $passwordHashed = password_hash($userPasswordGET, PASSWORD_DEFAULT);

            $sth = "INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPassWord`, `userFav01`, `userFav02`, `userImg`) VALUES ('null', :userName, :userEmail, :userPassword, :userFav01, :userFav02, 'null')";
            $insrt = $conn->prepare($sth);
            $insrt->bindParam(':userName', $userNameGET, PDO::PARAM_STR);
            $insrt->bindParam(':userEmail', $userEmailGET, PDO::PARAM_STR);
            $insrt->bindParam(':userPassword', $passwordHashed, PDO::PARAM_STR);
            $insrt->bindParam(':userFav01', $userCadFav01, PDO::PARAM_STR);
            $insrt->bindParam(':userFav02', $userCadFav02, PDO::PARAM_STR);
            $insrt->execute();

            $_SESSION['user_Email'] = $userEmailGET;
            $_SESSION['user_Name'] = $userNameGET;
            $_SESSION['user_ProfileImg'] = $userProfileImage;
            $_SESSION['user_Fav01'] = $userCadFav01;
            $_SESSION['user_Fav02'] = $userCadFav02;

            header("Location: ./home.php");
        }
    } else {
        header("Location: ./pagenotfound.php?error=404");
    }






?>