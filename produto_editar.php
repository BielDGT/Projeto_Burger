<?php 

$editar_id = $_POST['id'];
$nomeform = $_POST['nome'];
$descform = $_POST['descricao'];
$categoriaform = $_POST['categoria'];
$valorform = $_POST['valor'];

require './classe/banco.php';

$filmes = new Banco();
$banco = $filmes-> conexaoBanco();

try {
    // Create a PDO connection
    $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Enable error mode
    
    // Prepare the SQL query (without the 'img' field at this point)
    $cadastro = 'UPDATE tb_produtos SET nome = :nome, descrição = :descricao, categoria = :categoria, valor = :valor, img = :img WHERE id_produtos = :id';
    $box = $banco->prepare($cadastro);

    // Bind the values and execute the statement, setting an empty string as 'img' if no file is uploaded
    $box->execute([
        ':id' => $editar_id,
        ':nome' => htmlspecialchars($nomeform),
        ':descricao' => htmlspecialchars($descform),
        ':categoria' => htmlspecialchars($categoriaform),
        ':valor' => htmlspecialchars($valorform),
        ':img' => '' // Default to an empty string if no image is uploaded
    ]);

    // Check if the image file was uploaded
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == UPLOAD_ERR_OK) {
        // Define the allowed file extensions
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
        $upload_dir = './assets/fotos/fotos_cards/';
        $uploadfile = $upload_dir . basename($_FILES['imagem']['name']);

        // Check file extension
        $file_extension = strtolower(pathinfo($uploadfile, PATHINFO_EXTENSION));
        if (!in_array($file_extension, $allowed_extensions)) {
            die('Invalid file type. Allowed types: JPG, JPEG, PNG, GIF.');
        }

        // Check file size (5MB limit)
        if ($_FILES['imagem']['size'] > 5 * 1024 * 1024) {
            die('File size exceeds the 5MB limit.');
        }

        // Move the uploaded file
        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile)) {
            echo "Arquivo válido e enviado com sucesso.\n";

            // Update the product record with the image path in the database
            $image_path = basename($_FILES['imagem']['name']); // Store the full path
            $updateQuery = 'UPDATE tb_produtos SET img = :img WHERE id_produtos = :id';
            $updateStmt = $banco->prepare($updateQuery);
            $updateStmt->execute([
                ':id' => $editar_id,
                ':img' => $image_path,
            ]);
            header('location:pagina_lista_produtos.php');
            
        } else {
            die('Possible file upload attack!');
        }
    } else {
        echo 'No file uploaded or error during upload.';
    }

} catch (PDOException $e) {
    // If there’s an error with the database, catch and display the error
    echo 'Error: ' . $e->getMessage();
}   


