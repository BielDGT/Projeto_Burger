

<?php

$nomeform = $_POST['nome'];
$descform = $_POST['descricao'];
$categoriaform = $_POST['categoria'];
$valorform = $_POST['valor'];
$imgForm = $_POST['img'];

$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);




$cadastro = 'INSERT INTO tb_produtos (nome, descrição, categoria, valor, Imagem) VALUES (:nome, :descricao, :categoria, :valor, :Imagem)';



$box = $banco->prepare($cadastro);

$box->execute([
    ':nome'=> $nomeform,
    ':descricao'=> $descform,
    ':categoria'=> $categoriaform,
    ':valor'=> $valorform,
    ':Imagem'=> $imgForm
]);