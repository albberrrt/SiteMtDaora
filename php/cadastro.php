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
                        <div class="errMessage">
                            Usuário ou Senha inválidos
                        </div>
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
                        
                    <?php } else {?>
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
                            <input type="password" id="inputCadPassword" class="inputLogin" name="inputCadPassword" placeholder=" " autocomplete="of" value="<?php if(isset($_GET['pass'])) { echo $_GET['pass'];} ?>">
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
<script type="text/javascript">
    const progressBar = document.getElementById('progressBar');
  $(document).ready(function() {
    if (window.location.href.indexOf("?cadProgress=") > -1) {
      setTimeout(() => {
        progressBar.classList.remove('progressBar');
        progressBar.classList.add('progressBar50');

      }, .1);
    }
  });
  var x, i, j, l, ll, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /* When an item is clicked, update the original select box,
        and the selected item: */
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);
</script>
</body>
</html>