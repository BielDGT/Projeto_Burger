<?php

$nomeform = $_POST['nome'];
$descform = $_POST['descricao'];
$categoriaform = $_POST['categoria'];
$valorform = $_POST['valor'];

require './classe/banco.php';

$filmes = new Banco();
$banco = $filmes->conexaoBanco();

try {
    $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $image_path = ''; // Caminho da imagem padrão

    // Verifica se uma imagem foi enviada
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == UPLOAD_ERR_OK) {
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
        $upload_dir = './assets/fotos/fotos_cards/';
        $uploadfile = $upload_dir . basename($_FILES['imagem']['name']);

        $file_extension = strtolower(pathinfo($uploadfile, PATHINFO_EXTENSION));

        // Verifica extensão
        if (!in_array($file_extension, $allowed_extensions)) {
            header("Location: ./pagina_cadastrar_produto.php?erro=tipo_invalido");
            exit();
        }

        // Verifica tamanho
        if ($_FILES['imagem']['size'] > 5 * 1024 * 1024) {
            header("Location: ./pagina_cadastrar_produto.php?erro=tamanho_excedido");
            exit();
        }

        // Move o arquivo
        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile)) {
            $image_path = basename($_FILES['imagem']['name']);
        } else {
            header("Location: ./pagina_cadastrar_produto.php?erro=upload_failed");
            exit();
        }
    }

    // Agora que está tudo certo, faz o INSERT
    $cadastro = 'INSERT INTO tb_produtos (nome, descrição, categoria, valor, img) 
                 VALUES (:nome, :descricao, :categoria, :valor, :img)';
    $box = $banco->prepare($cadastro);
    $box->execute([
        ':nome' => htmlspecialchars($nomeform),
        ':descricao' => htmlspecialchars($descform),
        ':categoria' => htmlspecialchars($categoriaform),
        ':valor' => htmlspecialchars($valorform),
        ':img' => $image_path
    ]);

    header('Location: status.php');
    exit();

} catch (PDOException $e) {
    $erro = urlencode($e->getMessage());
    header("Location: ./pagina_cadastrar_produto.php?erro=bd_$erro");
    exit();
}
