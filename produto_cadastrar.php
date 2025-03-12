

<?php

$nomeform = $_POST['nome'];
$descform = $_POST['descricao'];
$categoriaform = $_POST['categoria'];
$valorform = $_POST['valor'];

$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);




$cadastro = 'INSERT INTO tb_produtos (nome, descrição, categoria, valor) VALUES (:nome, :descricao, :categoria, :valor)';



$box = $banco->prepare($cadastro);

$box->execute([
    ':nome'=> $nomeform,
    ':descricao'=> $descform,
    ':categoria'=> $categoriaform,
    ':valor'=> $valorform
]);