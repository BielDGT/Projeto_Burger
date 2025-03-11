<?php
var_dump($_POST);

$editarId = $_POST['id'];
$editarNome = $_POST['nome'];
$editarSenha = $_POST['senha'];
$editarEmail = $_POST['email'];
$editarCep = $_POST['cep'];
$editarCpf = $_POST['cpf'];
$editarNascimento = $_POST['nascimento'];

$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
// dsn é a para localizar o banco de dados, mysql e nome do banco é a db_chamadinha, o localhost que é 127.0.0.1

$user = 'root';
// a variavel $user diz que o usuario é o root 

$password = '';
// senha para acessar o banco de dados. 

$banco = new PDO($dsn, $user, $password);
// a variavel $banco contém as variavel da conexão com o banco.

$update = 'UPDATE tb_clientes set nome = :nome, senha = :senha, email = :email, cep = :cep, cpf = :cpf, nascimento = :nascimento where id_Clientes = :id' ;
// script para fazer uma atualização da tabela tb_alunos no nome onde o id do aluno selecionado

$banco->prepare($update)->execute([
// a variavel $banco prepara o script update, logo executar
    ':id'=> $editarId,
    ':nome'=>$editarNome,
    ':senha'=>$editarSenha,
    ':cep'=>$editarCep,
    ':cpf'=>$editarCpf,
    ':nascimento'=>$editarNascimento,
]);


