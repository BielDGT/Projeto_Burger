<?php

$id_remover_carrinho = $_GET['id_remover'];

$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';

$user = 'root';

$password = '';

$banco = new PDO($dsn, $user, $password);


$remover = 'DELETE FROM tb_carrinho WHERE id  =  :id';

$resultado_remover_carrinho = $banco->prepare($remover);

$resultado_remover_carrinho->execute([
    ':id'=>$id_remover_carrinho,
])