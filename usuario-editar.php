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

$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
$user = 'root';
$password = '';

try {

$banco = new PDO($dsn, $user, $password);

$update = 'UPDATE tb_usuario set usuario = :usuario, senha = :senha where id_pessoa = :id';


$banco->prepare($update)->execute([
    ':id' => $editarId,
    ':usuario' => $editarUsuario,
    ':senha' => $editarSenha,
]);


$update = 'UPDATE tb_pessoa set nome = :nome, email = :email, nascimento = :nascimento, cpf = :cpf, telefone = :tel, cep = :cep, img = :img  where id = :id';


$banco->prepare($update)->execute([
    ':id' => $editarId,
    ':nome' => $editarNome,
    ':email' => $editarEmail,
    ':cep' => $editarCep,
    ':cpf' => $editarCpf,
    ':nascimento' => $editarNascimento,
    ':tel' => $editarTel,
    ':img' => '',
]);

// Check if the image file was uploaded
if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
    // Define the allowed file extensions
    $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
    $upload_dir = './Assets/Fotos/fotos_usuarios/';
    $uploadfile = $upload_dir . basename($_FILES['img']['name']);

    // Check file extension
    $file_extension = strtolower(pathinfo($uploadfile, PATHINFO_EXTENSION));
    if (!in_array($file_extension, $allowed_extensions)) {
        die('Invalid file type. Allowed types: JPG, JPEG, PNG, GIF.');
    }

    // Check file size (5MB limit)
    if ($_FILES['img']['size'] > 5 * 1024 * 1024) {
        die('File size exceeds the 5MB limit.');
    }

    // Move the uploaded file
    if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
        echo "Arquivo válido e enviado com sucesso.\n";

        // Update the product record with the image path in the database
        $image_path = basename($_FILES['img']['name']); // Store the full path
        $updateQuery = 'UPDATE tb_pessoa SET img = :img WHERE id = :id';
        $updateStmt = $banco->prepare($updateQuery);
        $updateStmt->execute([
            ':id' => $editarId,
            ':img' => $image_path,
            
        ]);
        header('location:status.php');
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

