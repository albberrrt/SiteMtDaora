<?php

session_start();

if (isset($_SESSION['user_Id']) && isset($_SESSION['user_Email'])){

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/styleHome.css" media="screen" type="text/css">

    <title>BigodeFlix - Home</title>

</head>
<body>
    
    <header>
        <div class="logo-Div">
            <img src="../img/Logo-BigodeFlix-550x169.png" width="180">
        </div>
        <div class="nav-Div">
            <div class="navImages">
                <div class="profileImageDiv">
                <img src="<?php echo $_SESSION['user_ProfileImg']; ?>" width="90">
                </div>
                <div class="hoverImages"></div>
                <img class="setinha" src="../img/setinha.png" width="12">
            </div>
            <div class="dropMenu">
                <div class="dropMenuAccount dropButton">
                    <a href="./account.php">
                        Conta
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
    <main>
        <div class="filmApresentationBack">
            <img src="../img/movieBackgrounds/VdeVingançaBackground.jpg">
            <div class="gradientFilmApresentation"></div>
        </div>
        <div class="filmApresentation">
            <div class="filmApresentationContent">
                <h1>V de Vingança</h1>
                <div class="filmApresentationButtons">
                    <a href="https://streamtape.com/v/lxZv8lGKD2f7K6z">
                        <div id="buttonAssistir"> <img src="../img/setinha.png" width="40"><span>Assistir</span></div>
                    </a>
                    <button type="button" id="infoFilm" value="1" name="infoFilmButton">Mais informações</button>
                </div>
            </div>
        </div>
        <div class="filmSectionAll">
            
            <div class="filmSection">
                <div class="filmPost">
                    <img src="../img/movieBanners/VdeVingançaBanner.webp" width="200">
                </div>
                <div class="filmPost">
                    <img src="../img/movieBanners/VdeVingançaBanner.webp" width="200">
                </div>
                <div class="filmPost">
                    <img src="../img/movieBanners/VdeVingançaBanner.webp" width="200">
                </div>
                <div class="filmPost">
                    <img src="../img/movieBanners/VdeVingançaBanner.webp" width="200">
                </div>
                <div class="filmPost">
                    <img src="../img/movieBanners/VdeVingançaBanner.webp" width="200">
                </div>
                <div class="filmPost">
                    <img src="../img/movieBanners/VdeVingançaBanner.webp" width="200">
                </div>
                <div class="filmPost">
                    <img src="../img/movieBanners/VdeVingançaBanner.webp" width="200">
                </div>
                
            </div>
        </div>
    </main>
    <div class="borderFooter"></div>
    <footer>
        <h2>BigodeFlix ®</h2>
    </footer>

</body>
</html>

<?php
} else {
    header("Location: ./login.php");
}

?>