<?php

$editarId = $_POST['id'];

$editarUsuario = $_POST['usuario'];
$editarSenha = $_POST['senha'];

$editarNome = $_POST['nome'];
$editarEmail = $_POST['email'];
$editarCep = $_POST['cep'];
$editarCpf = $_POST['cpf'];
$editarNascimento = $_POST['nascimento'];
$editarTel = $_POST['tel'];

require './classe/banco.php';

$filmes = new Banco();
$banco = $filmes->conexaoBanco();

try {
    $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verificar se há uma nova imagem
    $img = isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK ? $_FILES['img'] : null;
    $image_path = null;

    if ($img) {
        // Extensões permitidas e diretório de upload
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
        $upload_dir = './assets/fotos/fotos_usuarios/';
        $uploadfile = $upload_dir . basename($img['name']);

        // Verifica a extensão do arquivo
        $file_extension = strtolower(pathinfo($uploadfile, PATHINFO_EXTENSION));
        if (!in_array($file_extension, $allowed_extensions)) {
            header("Location: ./pagina_usuario-editar.php?id=$editarId&erro=tipo_invalido");
            exit();
        }

        // Verifica o tamanho do arquivo (5MB)
        if ($img['size'] > 5 * 1024 * 1024) {
            header("Location: ./pagina_usuario-editar.php?id=$editarId&erro=tamanho_excedido");
            exit();
        }

        // Move o arquivo para o diretório de upload
        if (move_uploaded_file($img['tmp_name'], $uploadfile)) {
            $image_path = basename($img['name']);
        } else {
            header("Location: ./pagina_usuario-editar.php?id=$editarId&erro=upload_failed");
            exit();
        }
    }

    // Só chegamos aqui se não houve erro com a imagem

    // Atualiza os dados de usuário
    $updateUsuario = 'UPDATE tb_usuario SET usuario = :usuario, senha = :senha WHERE id_pessoa = :id';
    $banco->prepare($updateUsuario)->execute([
        ':id' => $editarId,
        ':usuario' => $editarUsuario,
        ':senha' => $editarSenha,
    ]);

    // Atualiza os dados de pessoa
    $updatePessoa = 'UPDATE tb_pessoa SET nome = :nome, email = :email, nascimento = :nascimento, cpf = :cpf, telefone = :tel, cep = :cep WHERE id = :id';
    $banco->prepare($updatePessoa)->execute([
        ':id' => $editarId,
        ':nome' => $editarNome,
        ':email' => $editarEmail,
        ':cep' => $editarCep,
        ':cpf' => $editarCpf,
        ':nascimento' => $editarNascimento,
        ':tel' => $editarTel,
    ]);

    // Atualiza a imagem apenas se uma nova imagem foi enviada
    if ($image_path !== null) {
        $updateImagem = 'UPDATE tb_pessoa SET img = :img WHERE id = :id';
        $banco->prepare($updateImagem)->execute([
            ':id' => $editarId,
            ':img' => $image_path,
        ]);
    }

    header('Location: status.php');
    exit();

} catch (PDOException $e) {
    $erro = urlencode($e->getMessage());
    header("Location: ./pagina_usuario-editar.php?id=$editarId&erro=bd_$erro");
    exit();
}
?>
