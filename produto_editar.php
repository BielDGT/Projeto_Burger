<?php 

$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

echo'<pre>';
var_dump($_POST);

$editar_id = $_POST['id'];
$editar_nome = $_POST['nome'];
$editar_descricao= $_POST['descricao'];
$editar_categoria= $_POST['categoria'];
$editar_valor= $_POST['valor'];

$editar = 'UPDATE tb_produtos SET nome = :nome, descrição = :descricao, categoria = :categoria, valor = :valor WHERE id_produtos = :id';

$banco->prepare($editar)->execute([
    ':id' => $editar_id,
    ':nome' => $editar_nome,
    ':descricao' => $editar_descricao,
    ':categoria' => $editar_categoria,
    ':valor' => $editar_valor
]);
