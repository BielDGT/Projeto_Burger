<?php 

echo '<h1> Cadastro de cliente </h1>';

echo '<pre>';
var_dump($_POST);

$nomeFormulario = $_POST['nome'];
$emailFormulario = $_POST['email'];
$senhaFormulario = $_POST['senha'];
$cepFormulario = $_POST['cep'];
$cpfFormulario = $_POST['cpf'];
$nascFormulario = $_POST['nasc'];

$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);


$insert = 'INSERT INTO tb_clientes (nome, senha, email, cep, cpf, nascimento) 
VALUE (:nome, :senha, :email, :cep, :cpf, :nascimento)';

$box = $banco->prepare($insert);

$box->execute([ 
    
    ':nome' => $nomeFormulario,
    ':email' => $emailFormulario,
    ':senha' => $senhaFormulario,
    ':cep' => $cepFormulario,
    ':cpf' => $cpfFormulario,
    ':nascimento' => $nascFormulario,
]);