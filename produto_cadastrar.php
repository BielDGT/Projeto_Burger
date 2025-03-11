

<?php

$nomeform = $_POST['nome'];


$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);



$cadastro = 'INSERT INTO tb_produtos (nome) VALUES (:nome)';



$box = $banco->prepare($cadastro);

$box->execute([
    ':nome'=> $nomeform,
  
]);