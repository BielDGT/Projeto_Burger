<?php
session_start();

if (isset($_POST['testeacao'])) {
    unset($_SESSION['cart']); // Remove somente a variável 'cart' da sessão

    sleep(5);

    header("Location: pagina_historico_compras.php");
}
?>
