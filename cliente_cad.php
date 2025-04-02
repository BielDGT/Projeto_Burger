<?php 

echo '<h1> Cadastro de cliente </h1>';

echo '<pre>';
var_dump($_POST);

$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);


$nome = $_POST['nome'];
$email = $_POST['email'];
$nasc = $_POST['nasc'];
$cpf = $_POST['cpf'];
$tel = $_POST['tel'];
$cep = $_POST['cep'];


$insert = 'INSERT INTO tb_pessoa (nome, email, nascimento, cpf, telefone, cep) 
VALUE (:nome, :email, :nasc, :cpf, :tel, :cep)';

$box = $banco->prepare($insert);

$box->execute([ 
    ':nome' => $nome,
    ':email' => $email,
    ':nasc' => $nasc,
    ':cpf' => $cpf,
    ':tel' => $tel,
    ':cep' => $cep,

]);


$user = $_POST['user'];
$senha = $_POST['senha'];
$id_pessoa = $banco->lastInsertId();

$insert = 'INSERT INTO tb_usuario (usuario, senha, id_pessoa) VALUE (:user , :senha, :id_pessoa)';

$box = $banco->prepare($insert);

$box->execute([ 
    ':user' => $user,
    ':senha' => $senha,
    ':id_pessoa' => $id_pessoa,
]);

echo '<script> 
alert("Usuario Cadastrado com Sucesso!!!")
window.location.replace("usuario-login.php")
</script>';