<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
include './dbConnection.php';

$uploadDir = '../img/profileImage';
 
if (!empty($_FILES)) {
 $tmpFile = $_FILES['file']['tmp_name'];
 $filename = $uploadDir.'/'. $_FILES['file']['name'];
 move_uploaded_file($tmpFile,$filename);
echo $filename;
} else {
    echo "File empty";
}

    $newUserName = $_POST['userEdiName'];
    $newUserEmail = $_POST['userEdiEmail'];
    $newUserPassword = $_POST['userEdiPassword'];
    // $newUserFav01 = $_POST['selectEdiFav01'];
    // $newUserFav02 = $_POST['selectEdiFav02'];

    echo $newUserName;

?>