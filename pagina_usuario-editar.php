<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php include './includes/header.php' ?>
<link rel="stylesheet" href="./assets/css/pagina_user.css">
<link rel="stylesheet" href="./assets/css/footer.css">

</head>

<?php

$id=$_GET['id'];


require './classe/banco.php';

$filmes = new Banco();
$banco = $filmes-> conexaoBanco();

$select = "SELECT * FROM tb_pessoa INNER JOIN tb_usuario ON tb_pessoa.id = tb_usuario.id_pessoa WHERE tb_usuario.id_pessoa = $id";

$resultado = $banco->query($select)->fetch();



if (isset($_GET['erro'])) {
    $erro = $_GET['erro'];
    $mensagem = ''; // Variável para a mensagem de erro

    switch ($erro) {
        case 'tipo_invalido':
            $mensagem = 'Erro: Tipo de arquivo inválido. Tipos permitidos: JPG, JPEG, PNG, GIF.';
            break;
        case 'tamanho_excedido':
            $mensagem = 'Erro: O tamanho do arquivo excede o limite de 5MB.';
            break;
        case 'upload_failed':
            $mensagem = 'Erro: Falha ao realizar o upload da imagem.';
            break;
    }

    // Se houver mensagem de erro, executa o script para mostrar o popup
    if ($mensagem) {
        echo "<script type='text/javascript'>
                alert('$mensagem');
              </script>";
    }
}

?>

<body>
    <main id="container-pagina-usuario" class="text-center">
        <section class="row-pagina-usuario" class="text-center">


            <div class="formulario">
                <form action="./usuario-editar.php" method="POST" enctype="multipart/form-data">

                    <input id="img-input" type="file" name="img" accept="image/*" value="<?php echo $resultado['img'] ?>">

                    <div class="foto_usuario">
                <img id="preview" src="./assets/fotos/fotos_usuarios/<?php 
                    // Verifica se o campo 'img' não está vazio
                    if (!empty($resultado['img'])) {
                        echo $resultado['img']; // Exibe a imagem do usuário se existir
                    } else {
                        echo 'usuario.png'; // Caso contrário, exibe a imagem padrão
                    }
                ?>" alt="icone do usuário" class="foto-usuario">
            </div>
                    <input type="hidden" class="formulario-campo" placeholder="id" name="id" value="<?php echo $resultado['id'] ?>" required ><br>

                    <input type="text" class="formulario-campo" placeholder="usuario" name="usuario" value="<?php echo $resultado['usuario'] ?>" 
                    id="user" minlength="3" maxlength="100" onblur="verificarUsuario()" required>
                        <span id="mensagem-erro-usuario"></span><br> 
                    <input type="text" class="formulario-campo" placeholder="Senha" name="senha" value="<?php echo $resultado['senha'] ?>" id="senha" onblur="validaSenha()" required>
                    <span id="erro-senha"></span><br>
                    <input type="text" class="formulario-campo" placeholder="Confirmar Senha" name="confirmar_senha" value="<?php echo $resultado['senha'] ?>" id="confirmar_senha" onblur="confirmarSenha()" required>
                    <span id="mensagem-erro-confirmar-senha"></span><br>



                    <input type="text" class="formulario-campo" placeholder="Nome" name="nome" value="<?php echo $resultado['nome'] ?>" id="nome" minlength="3" maxlength="100" onblur="verificarNome()" required>
                    <span id="mensagem-erro-nome"></span><br>
                    <input type="text" class="formulario-campo" placeholder="Email" name="email" value="<?php echo $resultado['email'] ?>" id="email" onblur="verificarEmail()" required>
                    <span id="mensagem-erro-email"></span><br>
                    <input type="text" class="formulario-campo" placeholder="CPF" name="cpf" value="<?php echo $resultado['cpf'] ?>" required
                        id="cpf" onblur="validacpf()" oninput="aplicarMascaraCPF(event)" maxlength="14">
                        <span id="mensagem-cpf"></span><br>
                    <input type="text" class="formulario-campo" placeholder="CEP" name="cep" value="<?php echo $resultado['cep'] ?>" required
                        id="cep" onblur="validacep()" oninput="aplicarMascaraCEP(event)" maxlength="9">
                        <span id="mensagem-cep"></span><br>
                    <input type="date" class="formulario-campo" placeholder="nascimento" name="nascimento" value="<?php echo $resultado['nascimento'] ?>" id="nasc" onblur="validanasc()" required>
                    <span id="mensagem-nasc"></span><br>
                    <input type="text" class="formulario-campo" placeholder="telefone" name="tel" value="<?php echo $resultado['telefone'] ?>" id="telefone"
                        oninput="aplicarMascaraTelefone(event)" onblur="validatelefone()" required maxlength="14">
                        <span id="mensagem-erro-telefone"></span><br>

                    <input type="submit" class="form-button" value="Editar" onclick="return validarFormulario()">
                </form>
            </div>
        </section>


    </main>
</body>
<?php include './includes/footer.php' ?>

<script src="./assets/js/upImg.js"></script>
<script src="./assets/js/validacao.js"></script>
</html>