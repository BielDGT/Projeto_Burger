<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    main {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    form {
        width: 600px;
    }

    img {
        width: 200px;
        object-fit: cover;
    }
</style>


<main class="container text-center my-5">
    <h1>Trocar senha</h1>
    <p>Insira o Usuario e cpf para trocar senha</p>
    <form action="./changePass_Aux.php" method="POST">

        <div class="row mt-2">
            <div class="col">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" class="form-control" required
                    id="usuario" minlength="3" maxlength="100" onblur="verificarUsuarioLogin()">
                <span id="mensagem-erro-usuario-login"></span>
            </div>
            <div class="col">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" class="form-control" required
                    id="cpf" onblur="validacpf()" oninput="aplicarMascaraCPF(event)" maxlength="14">
                <span id="mensagem-cpf"></span>
            </div>
        </div>
        <br>
        <input class="btn btn-danger" type="submit">

    </form>
    <a class="btn btn-primary" href="./usuario-login.php">Voltar</a>

</main>

<script src="./Assets/js/validacao.js"></script>