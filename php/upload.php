<?php

$targetDir = "../img/";
$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
$uploeadOk = 1;

$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
?>