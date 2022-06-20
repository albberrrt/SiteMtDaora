<?php
require_once './dbQuery.php';
include("./cadastroAuth.php");
    
if (isset($_GET['error'])) {
    $error = $_GET['error'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/styleCadastro.css" media="screen" type="text/css">
    <link rel="stylesheet" href="../css/styleMain.css" media="screen" type="text/css">

    

    <title>BigodeFlix - Cadastro</title>

</head>
<body>
<div class="allDiv">
    <header>
        <img src="../img/Logo-BigodeFlix-550x169.png" width="240">
    </header>
    <main>
        <div class="contentMax">
        <div id="content">
            <?php if(isset($_GET['cadProgress']) == 2) { ?>
            <div class="backButton">
                <a class="backButtonLink" href="./cadastro.php?error=68&userName=<?php echo $_GET['userName'] ?>&email=<?php echo $_GET['email'] ?>">
                    <img src="../img/arrowBack.webp">
                    <h5>Voltar</h5>
                </a>
            </div>
            <?php } ?>
            <?php if(isset($_GET['cadProgress']) != 2) { ?>
            <form action="./cadastroAuth.php" method="POST">
                <h1>Cadastro</h1>
                <div class="progressBarClass">
                    <div class="progressBar"></div>
                </div>
                <section id="secCadastro">
                    
                    <?php if(isset($error)) { if ($error == 20 || $error == 26 || $error == 22 || $error == 24) { ?>
                        <div class="input-div">
                            <input type="email" id="inputCadEmail" class="inputLogin errStyle" name="inputCadEmail" placeholder=" " autocomplete="of">
                            <label for="inputCadEmail" class="placeholder-input">E-mail</label>
                        </div>
                        <?php if(isset($_GET['emailalreadyexists'])) { 
                            if ($_GET['emailalreadyexists'] == true) { ?>
                                <div class="errMessage">
                                Email já existe, coloque outro
                                </div>
                           <?php }
                                } else { ?>
                            <div class="errMessage">
                            Usuário ou Senha inválidos
                            </div>
                        <?php } ?>   

                    <?php } else {?>
                        <div class="input-div">
                            <input type="email" id="inputCadEmail" class="inputLogin" name="inputCadEmail" placeholder=" " autocomplete="of" value="<?php if(isset($_GET['email'])) { echo $_GET['email'];} ?>">
                            <label for="inputCadEmail" class="placeholder-input">E-mail</label>
                        </div>
                    <?php } ?>

                    <?php if ($error == 20 || $error == 30 || $error == 28 || $error == 22) { ?>
                        <div class="input-div">
                            <input type="text" id="inputCadName" class="inputLogin errStyle" name="inputCadUserName" placeholder=" " autocomplete="of" minlenght="4">
                            <label for="inputCadName" class="placeholder-input">Nome de usuário</label>
                        </div>
                        <div class="errMessage">
                            Usuário ou Senha inválidos
                        </div>
                    <?php } else { ?>
                        <div class="input-div">
                                <input type="text" id="inputCadName" class="inputLogin" name="inputCadUserName" placeholder=" " autocomplete="of" minlenght="4" value="<?php if(isset($_GET['userName'])) { echo $_GET['userName'];} ?>">
                                <label for="inputCadName" class="placeholder-input">Nome de Usuário</label>
                        </div>
                    <?php } ?> 

                    <?php if ($error == 20 || $error == 28 || $error == 24 || $error == 32) { ?>
                        <div class="input-div">
                            <input type="password" id="inputCadPassword" class="inputLogin errStyle" name="inputCadPassword" placeholder=" " autocomplete="of">
                            <label for="inputCadPassword" class="placeholder-input">Senha</label>
                            </div>
                        <div class="errMessage">
                            Usuário ou Senha inválidos
                        </div>
                    <?php } else {?>
                        <div class="input-div">
                            <input type="password" id="inputCadPassword" class="inputLogin" name="inputCadPassword" placeholder=" " autocomplete="of">
                            <label for="inputCadPassword" class="placeholder-input">Senha</label>
                        </div>
                    <?php }} else { ?>
                        <div class="input-div">
                        <input type="email" id="inputCadEmail" class="inputLogin" name="inputCadEmail" placeholder=" " autocomplete="of">
                        <label for="inputCadEmail" class="placeholder-input">E-mail</label>
                        </div>
                        <div class="input-div">
                                <input type="text" id="inputCadName" class="inputLogin" name="inputCadUserName" placeholder=" " autocomplete="of" minlenght="4">
                                <label for="inputCadName" class="placeholder-input">Nome de Usuário</label>
                        </div>
                        <div class="input-div">
                            <input type="password" id="inputCadPassword" class="inputLogin" name="inputCadPassword" placeholder=" " autocomplete="of">
                            <label for="inputCadPassword" class="placeholder-input">Senha</label>
                        </div>
                    <?php } ?>

                    <div class="button-div">
                        <button type="submit">Avançar</button>
                    </div>
                        <h5>Já possui uma conta? <a href="./login.php">Entre agora!!</a></h5>
                </section>
            </form>
            <?php } else if (isset($_GET['cadProgress']) == 2 && !empty($_GET['userName']) && !empty($_GET['email']) && !empty($_GET['pass'])) { ?>
            <form action="./insertCad.php?userName=<?php echo $_GET['userName'] ?>&email=<?php echo $_GET['email'] ?>&pass=<?php echo $_GET['pass'] ?>&complete=true" method="POST">
                <h1>Cadastro</h1>
                <div class="progressBarClass">
                    <div class="progressBar" id="progressBar"></div>
                </div>
                <section id="secCadastro">
                    <div class="input-div">
                        <h4 id="h4Select"><?php echo $_GET['userName'] . " "?>selecione seus 2 gêneros de filmes favoritos: </h4>
                        <?php if(isset($_GET['error']) == 256) { ?>
                        <div class="cadErrMessageDiv">
                        <h4>*Selecione gêneros diferentes</h4>
                        </div>
                        <?php } ?>
                        <div class="custom-select">
                        <select class=" selectClass select01" name="selectFav01" id="selectFav01Id" title="selectFav01">
                            <option value="" selected disabled hidden>Selecione aqui</option>
                            <?php foreach($genresRow as $key => $value) {?>
                                    <option for="selectFav01" value="<?php echo $value['idGenre']; ?>"><?php echo $value['Genre']; ?></option>
                                <?php } ?>
                        </select>
                        </div>
                    </div>
                    <div class="input-div">
                        <div class="custom-select">
                        <select class=" selectClass select02" name="selectFav02" id="selectFav02Id" title="selectFav01">
                            <option value="" selected disabled hidden>Selecione aqui</option>
                        <?php foreach($genresRow as $key => $value) { ?>
                                    <option for="selectFav02" value="<?php echo $value['idGenre']; ?>"><?php echo $value['Genre']; ?></option>
                        <?php } ?>
                        </select>
                        </div>
                    </div>
                    <div class="button-div">
                        <button type="submit">Entrar</button>
                    </div>
                        <h5>Já possui uma conta? <a href="./login.php">Entre agora!!</a></h5>
                </section>
            </form>
            <?php } else { header("Location: ./pagenotfound.php?error=404");}?>
        </div>
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
</body>
</html>