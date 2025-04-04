document.getElementById('enviar').addEventListener('click', function() {
    // Exibe a mensagem de confirmação
    const mensagemPedido = document.getElementById('mensagem');

    document.getElementById('mensagem').classList.remove('hidden'); //removendo o hidden da mensagem
    
    setTimeout(function() {
        mensagemPedido.classList.add('hidden'); //colocando tempo de 5 segundoa
    }, 5000);

    $_SESSION['cart'] = [];
});



