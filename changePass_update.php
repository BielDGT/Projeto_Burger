<?php 

echo '<h1> Update senha </h1>';

echo '<pre>';
var_dump($_POST);

require './classe/banco.php';

$filmes = new Banco();
$banco = $filmes-> conexaoBanco();

$usuario = $_POST['usuario'];
$newPass = $_POST ['newPass'];

$update = 'UPDATE tb_usuario SET senha = :pass WHERE usuario = :usuario';

$box = $banco->prepare($update);

$box->execute([ 
    ':usuario' => $usuario,
    ':pass' => $newPass,
]);

echo '<script> 
alert("Senha Atualizada com Sucesso!!!")
window.location.replace("usuario-login.php")
</script>';


