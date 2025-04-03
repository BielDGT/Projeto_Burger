<?php
session_start();

// Inicializa o carrinho se não existir
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Verifica se os dados do produto foram enviados
if (isset($_POST['id_produtos'])) {
    $id = $_POST['id_produtos'];

    // Adiciona ao carrinho
    $_SESSION['cart'][$id] = [
        'nome' => $_POST['nome'],
        'img'=>$_POST['img'],
        'descricao' => $_POST['descrição'],
        'categoria' => $_POST['categoria'],
        'valor' => $_POST['valor'],
        'quantidade' => ($_SESSION['cart'][$id]['quantidade'] ?? 0) + 1
    ];
}

// Redireciona de volta para a página principal
header("Location: index.php");
exit();
