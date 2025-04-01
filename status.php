<?php
include './includes/header.php';

if (empty($_SESSION) && !isset($_SESSION['status'])){
    header('location:usuario-login.php');

}else if ($_SESSION['status'] == "admin"){
    include './pagina_admin.php';
}else if ($_SESSION['status'] == ""){
    include './pagina_usuario.php';
}