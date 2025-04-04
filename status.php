<?php
include './includes/header.php';


if (empty($_SESSION['usuario']) && !isset($_SESSION['usuario']['status'])){
    header('location:usuario-login.php');
}else if (isset($_SESSION['usuario']['status']) && $_SESSION['usuario']['status'] == "admin"){
    include './pagina_admin.php';
}else if (isset($_SESSION['usuario']['status']) && $_SESSION['usuario']['status'] == ""){
    include './pagina_usuario.php';
}