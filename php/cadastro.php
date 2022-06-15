<?php
session_start();
    
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
        <div id="content">
            <form action="./cadastroAuth.php" method="POST">
                <h1>Cadastro</h1>
                <div class="progressBarClass">
                    <div class="progressBar"></div>
                </div>
                <section id="secCadastro">
                    <div class="input-div">
                    <?php if ($error == 26 || $error == 22 || $error == 24) { ?>
                        <input type="text" id="inputCadEmail" class="inputLogin errStyle" name="inputCadEmail" placeholder=" " autocomplete="of">
                        <label for="inputCadEmail" class="placeholder-input">E-mail</label>
                        <div class="errMessage">
                            Usuário ou Senha inválidos
                        </div>
                    <?php } else {?>
                        <input type="text" id="inputCadEmail" class="inputLogin" name="inputCadEmail" placeholder=" " autocomplete="of">
                        <label for="inputCadEmail" class="placeholder-input">E-mail</label>
                    <?php } ?>
                    </div>
                    <div class="input-div">
                    <?php if ($error == 30 || $error == 22 || $error == 28) { ?>
                        <input type="text" id="inputCadEmail" class="inputLogin errStyle" name="inputCadEmail" placeholder=" " autocomplete="of">
                        <label for="inputCadEmail" class="placeholder-input">E-mail</label>
                        <div class="errMessage">
                            Usuário ou Senha inválidos
                        </div>
                    <?php } else {?>
                        <input type="text" id="inputCadEmail" class="inputLogin" name="inputCadEmail" placeholder=" " autocomplete="of">
                        <label for="inputCadEmail" class="placeholder-input">E-mail</label>
                    <?php } ?> 
                    </div>
                    <div class="input-div">
                    <?php if ($error == 28 || $error == 32 || $error == 24) { ?>
                        <input type="text" id="inputCadEmail" class="inputLogin errStyle" name="inputCadEmail" placeholder=" " autocomplete="of">
                        <label for="inputCadEmail" class="placeholder-input">E-mail</label>
                        <div class="errMessage">
                            Usuário ou Senha inválidos
                        </div>
                    <?php } else {?>
                        <input type="text" id="inputCadEmail" class="inputLogin" name="inputCadEmail" placeholder=" " autocomplete="of">
                        <label for="inputCadEmail" class="placeholder-input">E-mail</label>
                    <?php } ?>
                    </div>
                    <div class="button-div">
                        <button type="submit">Entrar</button>
                    </div>
                        <h5>Já possui uma conta? <a href="./login.php">Entre agora!!</a></h5>
                </section>
            </form>
        </div>


    </main>
    <div class="shadowFooter"></div>
    <div class="borderFooter"></div>
    <footer>
        <h2>BigodeFlix ®</h2>
    </footer>
</div>
</body>
</html>