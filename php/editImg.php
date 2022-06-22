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
    $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
    $newFileName = $uploadDir . '/' . $_SESSION['user_Name'] . "Profile.jpg";

    rename($filename, $newFileName);
    
    move_uploaded_file($tmpFile,$newFileName);
    
    $_SESSION['user_ProfileImg'] = $newFileName;
    
} else {
    echo "File empty";
}

?>
