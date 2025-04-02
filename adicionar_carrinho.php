<?php session_start();

$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';

$user = 'root';

$password = '';

$banco = new PDO($dsn, $user, $password);

$id_pessoa_carrinho = $_SESSION['id_pessoa'];

$id_produto_carrinho = $_GET['id_produtos'];


$script = "INSERT INTO tb_carrinho (id_produto, id_pessoa) VALUES (:id_produto, :id_pessoa)";

$box = $banco->prepare($script);

$box->execute([
    ':id_produto' => $id_produto_carrinho,
    ':id_pessoa' => $id_pessoa_carrinho
]);
