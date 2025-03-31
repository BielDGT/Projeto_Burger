// Array que vai armazenar os itens do carrinho
let carrinho = [];

// Função para adicionar produtos ao carrinho
function adicionarAoCarrinho(nome, preco) {
    const produto = {
        nome: nome,
        preco: preco
    };

    // Adiciona o produto ao carrinho
    carrinho.push(produto);

    // Atualiza a exibição do carrinho
    exibirCarrinho();
}

// Função para remover um produto do carrinho
function removerDoCarrinho(indice) {
    // Remove o produto pelo índice
    carrinho.splice(indice, 1);

    // Atualiza a exibição do carrinho
    exibirCarrinho();
}

// Função para exibir o carrinho na tela
function exibirCarrinho() {
    const carrinhoContainer = document.getElementById('carrinho');
    const totalContainer = document.getElementById('total');

    // Limpa o conteúdo atual do carrinho
    carrinhoContainer.innerHTML = '';

    if (carrinho.length === 0) {
        carrinhoContainer.innerHTML = '<p>O carrinho está vazio.</p>';
        totalContainer.innerHTML = '<p>Total: R$ 0,00</p>';
    } else {
        let total = 0;
        carrinho.forEach((produto, indice) => {
            const itemCarrinho = document.createElement('div');
            itemCarrinho.innerHTML = `
                <p>${produto.nome} - R$ ${produto.preco}</p>
                <button onclick="removerDoCarrinho(${indice})">Remover</button>
            `;
            carrinhoContainer.appendChild(itemCarrinho);
            total += produto.preco;
        });

        totalContainer.innerHTML = `<p>Total: R$ ${total.toFixed(2)}</p>`;
    }
}
