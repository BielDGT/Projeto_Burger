<?php
session_start(); // Inicia a sessão

// Verifica se recebeu o ID via POST
if (isset($_POST['id_produtos'])) {
    $id_produto = $_POST['id_produtos'];

    // Verifica se o item existe no carrinho antes de remover
    if (isset($_SESSION['cart'][$id_produto])) {
        unset($_SESSION['cart'][$id_produto]); // Remove o item do carrinho
    }

    
}

// Redireciona de volta para a página do carrinho
header("Location: pagina_historico_compras.php");
exit(); //serve para nenhum outro codigo php seja executado para o redirecionamento de volta para a pagina historico(carrinho)
