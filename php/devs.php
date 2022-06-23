<?php

session_start();
require_once './dbQuery.php';

if (isset($_SESSION['user_Name']) && isset($_SESSION['user_Email'])){

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style404.css" media="screen" type="text/css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

    

    <title>BigodeFlix - Home</title>

</head>
<body>
    
<header>
        <div class="logo-Div">
            <img src="../img/Logo-BigodeFlix-550x169.png" width="180">
        </div>
        <div class="nav-Div" id="navDiv">
            <button id="buttonMenu">
                <div class="navImages">
                    <div class="hoverImages">
                        <div class="profileImageDiv">
                        <img src="<?php echo $_SESSION['user_ProfileImg']; ?>" width="70">
                        </div>
                    </div>
                    
                    <img class="setinha" src="../img/setinha.png" id="setaImg" width="12">
                </div>
            </button>
            <div class="dropMenu" id="dropMenu">
                <div class="dropMenuAccount dropButton">
                    <a href="./account.php">
                        Conta
                    </a>
                </div>
                <div class="dropMenuLogout dropButton">
                    <a href="./devs.php">
                        Devs
                    </a>
                </div>
                <div class="dropMenuLogout dropButton">
                    <a href="./logout.php">
                        Sair
                    </a>
                </div>
            </div>
        </div>
    </header>
        <div class="allDiv">
    <main>
        <div id="content">
            <div class="person">
                <div class="image">
                    <img id="gui" src="../img/Guilherme.jpg" width="300">
                </div>
                <span>Guilherme Dias</span>
            </div>
            <div class="person">
                <div class="image">
                    <img id="eu" src="../img/Albert.jpg" width="300">
                </div>
                <span>Albert Smaczylo</span>
            </div>
        </div>


    </main>
    <div class="shadowFooter"></div>
    <div class="borderFooter"></div>
    <footer>
        <h2>BigodeFlix ®</h2>
    </footer>
</div>
    <script type="text/javascript" src="../js/style.js"></script>
</body>
<?php } else {
    header("Location: ./login.php");
} ?>