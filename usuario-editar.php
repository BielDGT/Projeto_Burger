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
    // Atualização dos dados de usuário
    $update = 'UPDATE tb_usuario set usuario = :usuario, senha = :senha where id_pessoa = :id';
    $banco->prepare($update)->execute([
        ':id' => $editarId,
        ':usuario' => $editarUsuario,
        ':senha' => $editarSenha,
    ]);

    // Verificar se há uma nova imagem
    $img = isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK ? $_FILES['img'] : null;

    // Se o usuário não enviou uma nova imagem, mantemos a imagem existente
    if ($img) {
        // Defina as extensões permitidas e o diretório de upload
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
        $upload_dir = './Assets/Fotos/fotos_usuarios/';
        $uploadfile = $upload_dir . basename($img['name']);

        // Verifica a extensão do arquivo
        $file_extension = strtolower(pathinfo($uploadfile, PATHINFO_EXTENSION));
        if (!in_array($file_extension, $allowed_extensions)) { //verifica se o valor da extensao nao esta dentro da lista de exten.
            die('Tipo de arquivo inválido. Tipos permitidos: JPG, JPEG, PNG, GIF.');
        }

        // Verifica o tamanho do arquivo (limite de 5MB)
        if ($img['size'] > 5 * 1024 * 1024) {
            die('O tamanho do arquivo excede o limite de 5MB.');
        }

        // Move o arquivo para o diretório de upload
        if (move_uploaded_file($img['tmp_name'], $uploadfile)) {//move para o diretiorio.
            echo "Arquivo válido e enviado com sucesso.\n";

            // Atualiza o caminho da imagem no banco de dados
            $image_path = basename($img['name']); //pega só  o nome da imagem
            $updateQuery = 'UPDATE tb_pessoa SET img = :img WHERE id = :id';
            $updateStmt = $banco->prepare($updateQuery);
            $updateStmt->execute([
                ':id' => $editarId,
                ':img' => $image_path,
            ]);
        } else {
            die('Possível ataque de upload de arquivo!');
        }
    } else {
        // Caso o usuário não tenha enviado uma nova imagem, mantemos a existente
        echo 'Nenhuma nova imagem foi carregada, mantendo a imagem existente.';
    }

    // Atualiza os dados de pessoa sem a imagem (caso não tenha sido enviada uma nova imagem)
    $update = 'UPDATE tb_pessoa set nome = :nome, email = :email, nascimento = :nascimento, cpf = :cpf, telefone = :tel, cep = :cep where id = :id';
    $banco->prepare($update)->execute([
        ':id' => $editarId,
        ':nome' => $editarNome,
        ':email' => $editarEmail,
        ':cep' => $editarCep,
        ':cpf' => $editarCpf,
        ':nascimento' => $editarNascimento,
        ':tel' => $editarTel,
    ]);

    header('location:status.php');
} catch (PDOException $e) {
    // Se houver um erro no banco de dados, captura e exibe o erro
    echo 'Erro: ' . $e->getMessage();
}

?>
