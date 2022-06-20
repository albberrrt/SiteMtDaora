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

    <!-- <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" /> -->
    <link rel="stylesheet" href="../css/styleAccount.css" media="screen" type="text/css">

    <title>BigodeFlix - Conta</title>
</head>
<body>
<div class="allDiv">
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
                    <a href="./home.php">
                        Home
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
        <div id="content">
            <?php if(!isset($_GET['editMode'])) { ?>
                <?php if(isset($_GET['verify']) == true) { ?>
                    <form action="./verify.php" class="verifyPassDiv" method="POST">
                        <h4>Coloque sua senha</h4>
                        <?php if (isset($_GET['invalidpass']) == true) { ?>
                        <div class="input-div verifyInput">
                            <input type="password" id="inputCadPassword" class="inputLogin errStyle inptPass" name="inputVefPassword" placeholder=" " autocomplete="of" required>
                            <label for="inputCadPassword" class="placeholder-input">Senha</label>
                        </div>
                        <div class="errMessage">
                            Usuário ou Senha inválidos
                        </div>
                        <?php } else { ?>
                        <div class="input-div verifyInput">
                            <input type="password" id="inputCadPassword" class="inputLogin inptPass" name="inputVefPassword" placeholder=" " autocomplete="of" required>
                            <label for="inputCadPassword" class="placeholder-input">Senha</label>
                        </div>
                        <?php } ?>
                        <div class="button-div verifyButton">
                        <button type="submit">Avançar</button>
                        </div>
                    </form>
                    <a class="backLink" href="./account.php"></a>

                <?php } ?>
            <div class="profileContent">
                <div class="sec01">
                    <section class="secImg">
                        <img src="<?php echo $_SESSION['user_ProfileImg'] ?>">
                    </section>
                    <section class="secInfo">
                        <h2><?php echo $_SESSION['user_Name'] ?></h2>
                        <h3><?php echo $_SESSION['user_Email'] ?></h3>
                    </section>
                </div>
                <section class="secFavGenres">
                    <h3>Gêneros favoritos</h3>

                    <?php foreach($genresRow as $key => $value) { 
                            if($value['idGenre'] == $_SESSION['user_Fav01']) { ?>
                        <div class="FavGenre">
                            <h1><?php echo $value['Genre']; ?></h1>
                            <img src="<?php echo $value['genreImg']; ?>">
                        </div>
                    <?php }} ?>

                    <?php foreach($genresRow as $key => $value) {
                        if($value['idGenre'] == $_SESSION['user_Fav02']) { ?>
                        <div class="FavGenre">
                            <h1 class="h1-1"><?php echo $value['Genre']; ?></h1>
                            
                            <img src="<?php echo $value['genreImg']; ?>">
                        </div> 
                    <?php }} ?>

                    <section class="profileButtons">
                    <a href="./account.php?verify=true">
                        <div class="editButton">
                            Editar
                        </div>
                    </a>
                </section>
                </section>
                
            </div>
            <?php } ?>
            <?php if(isset($_GET['editMode'])) { ?>
            <?php if(password_verify($_GET['pass'], $_GET['passh'])) { ?>

                <form class="formEdit" action="./editUser.php" enctype="multipart/form-data" method="POST">

                <div class="sec01">
                    <div id="previews"></div>
                    <div class="dropzone" id="dropzoneInput">
                        <div class="dz-message">Coloque sua foto aqui</div>
                    </div>

                    <div class="input-div">
                            <input type="email" id="inputCadEmail" class="inputLogin" name="inputEdiEmail" placeholder=" " autocomplete="of" value="<?php echo $_SESSION['user_Email']; ?>" required>
                            <label for="inputCadEmail" class="placeholder-input">E-mail</label>
                    </div>
                    <div class="input-div">
                            <input type="text" id="inputCadName" class="inputLogin" name="inputEdiUserName" placeholder=" " autocomplete="of" minlenght="4" value="<?php echo $_SESSION['user_Name']?>" required>
                            <label for="inputCadName" class="placeholder-input">Nome de Usuário</label>
                    </div>
                    <div class="input-div">
                            <input type="password" id="inputCadPassword" class="inputLogin" name="inputEdiPassword" placeholder=" " autocomplete="of" value="<?php echo $_GET['pass']; ?>" required>
                            <label for="inputCadPassword" class="placeholder-input">Senha</label>
                        </div>
                    </section>
                </div>
                <section class="secFavGenres">
                    <h3>Gêneros favoritos</h3>

                    <div class="input-div">
                        <h4 id="h4Select"><?php echo $_SESSION['user_Name'] . " "?>selecione seus 2 gêneros de filmes favoritos: </h4>
                        <?php if(isset($_GET['error']) == 256) { ?>
                        <div class="cadErrMessageDiv">
                        <h4>*Selecione gêneros diferentes</h4>
                        </div>
                        <?php } ?>
                        <div class="custom-select">
                        <select class=" selectClass select01" name="selectEdiFav01" id="selectFav01Id" title="selectFav01">
                            <option value="" selected disabled hidden>Selecione aqui</option>
                            <?php foreach($genresRow as $key => $value) {?>
                                    <option for="selectFav01" value="<?php echo $value['idGenre']; ?>"><?php echo $value['Genre']; ?></option>
                                <?php } ?>
                        </select>
                        </div>
                    </div>
                    <div class="input-div inptDiv2">
                        <div class="custom-select">
                        <select class=" selectClass select02" name="selectEdiFav02" id="selectFav02Id" title="selectFav01">
                            <option value="" selected disabled hidden>Selecione aqui</option>
                        <?php foreach($genresRow as $key => $value) { ?>
                                    <option for="selectFav02" value="<?php echo $value['idGenre']; ?>"><?php echo $value['Genre']; ?></option>
                        <?php } ?>
                        </select>
                        </div>
                    </div>

                    <section class="profileButtons">
                    <a href="./account.php">
                        <div class="editButton">
                            Cancelar
                        </div>
                    </a>
                    <div class="button-div">
                        <button type="submit" id="submitBtn">Salvar</button>
                    </div>
                </section>
                </section>

                </form>
            <?php } else {
                header("Location: ./pagenotfound.php?error=404");
            }} ?>
        </div>
    </main>
    <div class="shadowFooter"></div>
    <div class="borderFooter"></div>
    <footer>
        <h2>BigodeFlix ®</h2>
    </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/select.js"></script>
<script type="text/javascript" src="../js/style.js"></script>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<script type="text/javascript" src="../js/imageUploader.js"></script>
</body>
</html>
<?php
} else {
    header("Location: ./login.php");
}

?>