    document.addEventListener('DOMContentLoaded', function() {
        const checkboxes = document.querySelectorAll('.filtro input[type="checkbox"]');
        const produtos = document.querySelectorAll('.produtos .coluna');

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', filterProdutos); //chama a funcao
        });

        function filterProdutos() {
            const selectedCategories = Array.from(checkboxes) //converte em um array
                .filter(checkbox => checkbox.checked && checkbox.value !== 'Todos') //filtra e romove todos.
                .map(checkbox => checkbox.value);

            produtos.forEach(produto => { //passa por card
                const categoriaProduto = produto.dataset.categoria; //defini a cat dele
                const mostrarProduto = selectedCategories.length === 0 || selectedCategories.includes(categoriaProduto); //Se pelo menos uma das condições for verdadeira mostrara marcado ou nao.

                if (document.getElementById('todos').checked) { 
                    produto.style.display = 'block';//vai exibir todos 
                } else {
                    produto.style.display = mostrarProduto ? 'block' : 'none'; //vai aparecer o produto com  base na variavel mostrarproduto
                }
            });

            if (document.getElementById('todos').checked) {//verifica se esta amrcado
                checkboxes.forEach(checkbox => { 
                    if (checkbox.value !== 'Todos') {//ignora o todos.
                        checkbox.checked = false; //desmarca os outros
                    }
                });
            }
        }

        document.getElementById('todos').addEventListener('change', function() {
            if (this.checked) {
                produtos.forEach(produto => {
                    produto.style.display = 'block';
                });
                checkboxes.forEach(checkbox => {
                    if (checkbox.value !== 'Todos') {
                        checkbox.checked = false;
                    }
                });
            } else {
                filterProdutos();
            }
        });
    });