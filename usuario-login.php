<?php

include './includes/header.php';


if ($_SERVER["REQUEST_METHOD"] == 'POST' && !empty($_POST)) {

    $usuarioForm = $_POST['usuario'];
    $senhaForm = $_POST['senha'];

    require './classe/banco.php';

    $filmes = new Banco();
    $banco = $filmes-> conexaoBanco();

    $script = "SELECT * FROM tb_usuario WHERE usuario = '{$usuarioForm}' AND senha = '{$senhaForm}'";

    $result = $banco->query($script)->fetch();

    if (!empty($result) && $result != false) {

        $selectUsuario = "SELECT * FROM tb_pessoa WHERE id = {$result['id_pessoa']}";

        $dadosUsuario = $banco->query($selectUsuario)->fetch();

        session_start();

        $_SESSION['usuario']['id_pessoa']      = $dadosUsuario['id'];
        $_SESSION['usuario']['status']         = $result['status'];

        header('location:index.php');
    } else {
        echo '<script> 
        alert("Usuario ou Senha Invalido")
        window.location.replace("./usuario-login.php")
        </script>';
    }
}

include './pagina_login.php';

include_once './includes/footer.php';
