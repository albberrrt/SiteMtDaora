<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/styleLogin.css" media="screen" type="text/css">
    <link rel="stylesheet" href="../css/styleMain.css" media="screen" type="text/css">

    <?php include_once("./auth.php"); ?>
    <?php
    if (isset($_GET['error'])){
    $error = $_GET['error'];
    }
    ?>

    <title>BigodeFlix - Entrar</title>

</head>
<body>
<div class="allDiv">
    <header>
        <img src="../img/Logo-BigodeFlix-550x169.png" width="240">
    </header>
    <main>
        <div id="content">
            <form action="./auth.php" method="POST">
                <h1>Entrar</h1>
                <section id="secLogin">
                    
                    <?php if (isset($error)) { if ($error == "invalid_user") { ?>
                        <div class="input-div">
                            <input type="text" id="inputUserName" name="inputUserName" class="inputLogin errStyle" placeholder=" " autocomplete="of">
                            <label for="inputUserName" class="placeholder-input">Email ou nome de usuário</label>
                        </div>
                        <div class="errMessage">
                            Email ou nome de usuário inválido
                        </div>
                        <div class="input-div">
                            <input type="password" id="inputPassword" name="inputPassword" class="inputLogin" value="" placeholder=" ">
                            <label for="inputPassword" class="placeholder-input">Senha</label>
                        </div>
                    <?php }} else {?>

                        <div class="input-div">
                            <input type="text" id="inputUserName" name="inputUserName" class="inputLogin" placeholder=" " autocomplete="of">
                            <label for="inputUserName" class="placeholder-input">Email ou nome de usuário</label>
                        </div>

                    <?php } ?>

                    <?php if (isset($error)) { if ($error == "invalid_password") { ?>
                        <div class="input-div">
                            <input type="text" id="inputUserName" name="inputUserName" class="inputLogin" placeholder=" " autocomplete="of">
                            <label for="inputUserName" class="placeholder-input">Email ou nome de usuário</label>
                        </div>

                        <div class="input-div">
                            <input type="password" id="inputPassword" name="inputPassword" class="inputLogin  errStyle" value="" placeholder=" ">
                            <label for="inputPassword" class="placeholder-input">Senha</label>
                        </div>
                        <div class="errMessage">
                            Senha inválida
                        </div>
                    <?php }} else { ?>

                        <div class="input-div">
                            <input type="password" id="inputPassword" name="inputPassword" class="inputLogin" value="" placeholder=" ">
                            <label for="inputPassword" class="placeholder-input">Senha</label>
                        </div>

                    <?php } ?>

                    <div class="button-div">
                        <button type="submit">Entrar</button>
                    </div>
                        <h5>Não possui uma conta? <a href="./cadastro.php">Crie agora!!</a></h5>
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