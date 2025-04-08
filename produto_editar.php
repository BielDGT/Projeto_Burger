<?php

$editar_id = $_POST['id'];
$nomeform = $_POST['nome'];
$descform = $_POST['descricao'];
$categoriaform = $_POST['categoria'];
$valorform = $_POST['valor'];

require './classe/banco.php';

$filmes = new Banco();
$banco = $filmes->conexaoBanco();

try {
    // Cria a conexão PDO
    $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Habilita o modo de erro
    
    // Primeiro, verifica se o produto já tem uma imagem no banco
    $query = 'SELECT img FROM tb_produtos WHERE id_produtos = :id';
    $stmt = $banco->prepare($query);
    $stmt->execute([':id' => $editar_id]);
    $produto = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Se não houver imagem atual, define como vazio
    $imagemAtual = $produto['img'] ?? '';

    // Verifica se há uma imagem nova
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == UPLOAD_ERR_OK) {
        // Define as extensões permitidas
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
        $upload_dir = './assets/fotos/fotos_cards/';
        $uploadfile = $upload_dir . basename($_FILES['imagem']['name']);

        // Verifica a extensão do arquivo
        $file_extension = strtolower(pathinfo($uploadfile, PATHINFO_EXTENSION));
        if (!in_array($file_extension, $allowed_extensions)) {
            die('Tipo de arquivo inválido. Tipos permitidos: JPG, JPEG, PNG, GIF.');
        }

        // Verifica o tamanho do arquivo (limite de 5MB)
        if ($_FILES['imagem']['size'] > 5 * 1024 * 1024) {
            die('O tamanho do arquivo excede o limite de 5MB.');
        }

        // Move o arquivo para o diretório de destino
        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile)) {
            echo "Arquivo válido e enviado com sucesso.\n";

            // Atualiza o caminho da imagem no banco de dados
            $image_path = basename($_FILES['imagem']['name']); // Armazena o nome do arquivo
            $updateQuery = 'UPDATE tb_produtos SET nome = :nome, descrição = :descricao, categoria = :categoria, valor = :valor, img = :img WHERE id_produtos = :id';
            $updateStmt = $banco->prepare($updateQuery);
            $updateStmt->execute([
                ':id' => $editar_id,
                ':nome' => htmlspecialchars($nomeform),
                ':descricao' => htmlspecialchars($descform),
                ':categoria' => htmlspecialchars($categoriaform),
                ':valor' => htmlspecialchars($valorform),
                ':img' => $image_path, // A nova imagem
            ]);
            header('Location: pagina_lista_produtos.php');
        } else {
            die('Possível ataque de upload de arquivo!');
        }
    } else {
        // Se o usuário não enviar uma nova imagem, mantém a imagem atual no banco
        $updateQuery = 'UPDATE tb_produtos SET nome = :nome, descrição = :descricao, categoria = :categoria, valor = :valor, img = :img WHERE id_produtos = :id';
        $updateStmt = $banco->prepare($updateQuery);
        $updateStmt->execute([
            ':id' => $editar_id,
            ':nome' => htmlspecialchars($nomeform),
            ':descricao' => htmlspecialchars($descform),
            ':categoria' => htmlspecialchars($categoriaform),
            ':valor' => htmlspecialchars($valorform),
            ':img' => $imagemAtual, // Mantém a imagem atual
        ]);
        header('Location: pagina_lista_produtos.php');
    }

} catch (PDOException $e) {
    // Se houver um erro com o banco de dados, exibe o erro
    echo 'Erro: ' . $e->getMessage();
}
