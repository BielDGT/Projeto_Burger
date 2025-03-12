<?php

$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);


var_dump($_GET);

$idproduto = $_GET['id_produtos'];

$deletar ='DELETE FROM tb_produtos WHERE id_produtos = :id';

$box = $banco->prepare($deletar);

$box->execute([
    ':id' => $idproduto 
]);

echo '<script>
alert("Produto Apagado com Sucesso!!!")
window.location.replace("pagina_lista_produtos.php")
</script>';