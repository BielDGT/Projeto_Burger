<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="./Assets/css/login.css">

</head>



<body>
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
                    <div class="form-input-container">
                        <input type="text" class="form-input" placeholder="Usuario" name="usuario" autofocus required>
                        <input type="password" class="form-input" placeholder="Senha" name="senha" autofocus required>
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

                    <div class="form-input-container">
                        <input type="text" class="form-input" placeholder="Usuario" name="user" autofocus required>
                        <input type="password" class="form-input" placeholder="Senha" name="senha" autofocus required>

                        <input type="text" class="form-input" placeholder="Nome" name="nome" autofocus required>
                        <input type="email" class="form-input" placeholder="Email" name="email" autofocus required>
                        <input type="text" class="form-input" placeholder="Telefone" name="tel" autofocus required>
                        <input type="text" class="form-input" placeholder="CEP" name="cep" autofocus required>
                        <input type="text" class="form-input" placeholder="CPF" name="cpf" autofocus required>
                        <input type="date" class="form-input" placeholder="Nascimento" name="nasc" autofocus required>
                        <input type="submit" class="form-button" value="Cadastrar">
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

</html>