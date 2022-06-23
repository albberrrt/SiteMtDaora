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

    <link rel="stylesheet" href="../css/styleHome.css" media="screen" type="text/css">
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
        <div class="filmSectionAll swiper">
            
            <div class="filmSection swiper-wrapper">
                <?php foreach ($moviesRow as $key => $value) { ?>
                <div class="filmPost swiper-slide">
                    <img src="<?php echo $value['movieBanner'] ?>" width="200">
                </div>
                <?php } ?>
                
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </main>
    <div class="borderFooter"></div>
    <footer>
        <h2>BigodeFlix ®</h2>
    </footer>

    <script type="text/javascript" src="../js/style.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
        // Optional parameters
        loop: true,
        centeredSlides: true,
        
        slidesPerView: 7,
        spaceBetween: 3,

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        });
    </script>
</body>

</html>

<?php
} else {
    header("Location: ./login.php");
}

?>