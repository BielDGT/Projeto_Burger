<link rel="stylesheet" href="./Assets/css/login.css">

    <main class="login">
        <div class="login-container" id="login-container">
            <div class="form-container">

                <form class="form form-login" action="#login" method="POST">
                    <h2 class="form-title">Entrar</h2>
                    <div class="form-social">
                        <a href="#" class="social-icon">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="bi bi-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </div>
                    <br>
                    <div class="form-input-container">
                        <input type="text" class="form-input" placeholder="Usuario" name="usuario" required
                        id="usuario" minlength="3" maxlength="100" onblur="verificarUsuarioLogin()">
                        <span id="mensagem-erro-usuario-login"></span>

                        <input type="password" class="form-input" placeholder="Senha" name="senha" id="senha-login" onblur="validaSenhaLogin()" required>
                        <span id="erro-senha-loginz "></span>

                        <input type="submit" class="form-button" value="Entrar">
                    </div>
                    <a href="./changePass.php" class="form-link">Esqueceu a senha?</a>
                    <p class="mobile-text">Não tem conta?
                        <a href="#" id="open-register-mobile">Cadastre-se</a>
                    </p>
                </form>

                <form class="form form-register" action="./cliente_cad.php" method="POST">
                    <h2 class="form-title">Cadastrar</h2>
                    <div class="form-social">
                        <a href="#" class="social-icon">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="bi bi-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </div>
                    <br>
                    <div class="form-input-container">
                        <input type="text" class="form-input" placeholder="Usuario" name="user" 
                        id="user" minlength="3" maxlength="100" onblur="verificarUsuario()" required>
                        <span id="mensagem-erro-usuario"></span> 

                        <input type="password" class="form-input" placeholder="Senha" name="senha" id="senha" onblur="validaSenha()" required>
                        <span id="erro-senha"></span>

                        <input type="password" class="form-input" placeholder="confirmar senha" name="confirmar_senha" id="confirmar_senha" onblur="confirmarSenha()" required>
                        <span id="mensagem-erro-confirmar-senha"></span>

                        <input type="text" class="form-input" placeholder="Nome" name="nome" 
                        id="nome" minlength="3" maxlength="100" onblur="verificarNome()" required>
                        <span id="mensagem-erro-nome"></span>

                        <input type="email" class="form-input" placeholder="Email" name="email" 
                        id="email" onblur="verificarEmail()" required>
                        <span id="mensagem-erro-email"></span>

                        <input type="text" class="form-input" placeholder="Telefone" name="tel" id="telefone"
                        oninput="aplicarMascaraTelefone(event)" onblur="validatelefone()" required maxlength="14">
                        <span id="mensagem-erro-telefone"></span>

                        <input type="text" class="form-input" placeholder="CEP" name="cep" required
                        id="cep" onblur="validacep()" oninput="aplicarMascaraCEP(event)" maxlength="9">
                        <span id="mensagem-cep"></span>

                        <input type="text" class="form-input" placeholder="CPF" name="cpf" required
                        id="cpf" onblur="validacpf()" oninput="aplicarMascaraCPF(event)" maxlength="14">
                        <span id="mensagem-cpf"></span>

                        <input type="date" class="form-input" placeholder="Nascimento" name="nasc" id="nasc" onblur="validanasc()" required>
                        <span id="mensagem-nasc"></span>

                        <input type="submit" class="form-button" value="Cadastrar" onclick="return validarFormulario()">
                    </div>
                    <p class="mobile-text">
                        Já tem conta?
                        <a href="#" id="open-login-mobile">Login</a>
                    </p>
                </form>

            </div>


            <div class="overlay-container">
                <div class="overlay">
                    <img src="./Assets/Fotos/pagina_login/logo2.png" class="foto-logo" alt="logo">
                    <h2 class="form-title form-title-light">Já tem conta?</h2>
                    <button class="form-button form-button-light" id="open-login">Entrar</button>
                </div>
                <div class="overlay">
                    <img src="./Assets/Fotos/pagina_login/logo2.png" class="foto-logo" alt="logo">
                    <h2 class="form-title form-title-light">Seja Bem Vindo!</h2>
                    <button class="form-button form-button-light" id="open-register">Cadastrar</button>
                </div>
            </div>

        </div>
    </main>

</body>

<script src="./Assets/js/pagina_login.js"></script>
<script src="./Assets/js/validacao.js"></script>

</html>