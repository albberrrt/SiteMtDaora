<?php

session_start();

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/styleMain.css" media="screen" type="text/css">

    <title>BigodeFlix - Home</title>

</head>
<body>

    <header>
        <div>
        <img src="<?php echo $_SESSION['user_ProfileImg']; ?>" width=120>
        <h1><?php echo $_SESSION['user_Name'] ?></h1>
        </div>
    </header>
    <main>

    </main>
    <div class="borderFooter"></div>
    <footer>
        <h2>BigodeFlix ®</h2>
    </footer>

</body>
</html>