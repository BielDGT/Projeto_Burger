<?php
session_start();

if (isset($_POST['limpeza'])) {
    unset($_SESSION['cart']); // Remove somente a variável 'cart' da sessão

    sleep(5);

    header("Location: pagina_historico_compras.php");
}
?>
