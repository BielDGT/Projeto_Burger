<?php
echo '<h1>Aluno Editar</h1>';

echo '<pre>';

var_dump($_POST);

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


$banco = new PDO($dsn, $user, $password);

$update = 'UPDATE tb_usuario set usuario = :usuario, senha = :senha where id_pessoa = :id';


$banco->prepare($update)->execute([
    ':id' => $editarId,
    ':usuario' => $editarUsuario,
    ':senha' => $editarSenha,
]);


$update = 'UPDATE tb_pessoa set nome = :nome, email = :email, nascimento = :nascimento, cpf = :cpf, telefone = :tel, cep = :cep  where id = :id';


$banco->prepare($update)->execute([
    ':id' => $editarId,
    ':nome' => $editarNome,
    ':email' => $editarEmail,
    ':cep' => $editarCep,
    ':cpf' => $editarCpf,
    ':nascimento' => $editarNascimento,
    ':tel' => $editarTel,
]);

echo '<script> 
        alert("Atualização realizada com Sucesso!!!")
        window.location.replace("./pagina_usuario.php")
        </script>';

