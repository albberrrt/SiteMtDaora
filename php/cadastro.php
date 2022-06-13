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
            <form>
                <h1>Cadastro</h1>
                <section id="secLogin">
                    <div class="input-div">
                        <input type="text" id="inputCadEmail" class="inputLogin" placeholder=" " autocomplete="of">
                        <label for="inputCadEmail" class="placeholder-input">E-mail</label>
                    </div>
                    <div class="input-div">
                        <input type="text" id="inputCadUserName" class="inputLogin" placeholder=" " autocomplete="of">
                        <label for="inputCadUserName" class="placeholder-input">Nome de usuário</label>
                    </div>
                    <div class="input-div">
                        <input type="password" id="inputCadPassword" class="inputLogin" value="" placeholder=" ">
                        <label for="inputCadPassword" class="placeholder-input">Senha</label>
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