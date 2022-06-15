<?php switch($error_code) {
                            case 123: ?>
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

                    <?php break;
                            case 124: ?>
                        <div class="input-div">
                            <input type="text" id="inputUserName" value="<?php echo (htmlspecialchars($_GET['email'])) ?>" name="inputUserName" class="inputLogin" placeholder=" " autocomplete="of">
                            <label for="inputUserName" class="placeholder-input">Email ou nome de usuário</label>
                        </div>

                        <div class="input-div">
                            <input type="password" id="inputPassword" name="inputPassword" class="inputLogin  errStyle" value="" placeholder=" ">
                            <label for="inputPassword" class="placeholder-input">Senha</label>
                        </div>
                        <div class="errMessage">
                            Senha inválida
                        </div>
                    <?php breaK;
                            case 125: ?>
                            <div class="input-div">
                            <input type="text" id="inputUserName" value="<?php echo (htmlspecialchars($_GET['email'])) ?>" name="inputUserName" class="inputLogin errStyle" placeholder=" " autocomplete="of">
                            <label for="inputUserName" class="placeholder-input">Email ou nome de usuário</label>
                        </div>

                        <div class="input-div">
                            <input type="password" id="inputPassword" name="inputPassword" class="inputLogin  errStyle" value="" placeholder=" ">
                            <label for="inputPassword" class="placeholder-input">Senha</label>
                        </div>
                        <div class="errMessage">
                            Usuário ou Senha inválidos
                        </div>
                    <?php break;
                            default: ?>
                        <div class="input-div">
                            <input type="text" id="inputUserName" name="inputUserName" class="inputLogin" placeholder=" " autocomplete="of">
                            <label for="inputUserName" class="placeholder-input">Email ou nome de usuário</label>
                        </div>
                        <div class="input-div">
                            <input type="password" id="inputPassword" name="inputPassword" class="inputLogin" value="" placeholder=" ">
                            <label for="inputPassword" class="placeholder-input">Senha</label>
                        </div>
                            
                    <?php break; } ?>