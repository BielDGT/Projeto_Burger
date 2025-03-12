    document.addEventListener('DOMContentLoaded', function() {
        const checkboxes = document.querySelectorAll('.filtro input[type="checkbox"]');
        const produtos = document.querySelectorAll('.produtos .coluna');

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', filterProdutos);
        });

        function filterProdutos() {
            const selectedCategories = Array.from(checkboxes)
                .filter(checkbox => checkbox.checked && checkbox.value !== 'Todos')
                .map(checkbox => checkbox.value);

            produtos.forEach(produto => {
                const categoriaProduto = produto.dataset.categoria;
                const mostrarProduto = selectedCategories.length === 0 || selectedCategories.includes(categoriaProduto);

                if (document.getElementById('todos').checked) {
                    produto.style.display = 'block';
                } else {
                    produto.style.display = mostrarProduto ? 'block' : 'none';
                }
            });

            if (document.getElementById('todos').checked) {
                checkboxes.forEach(checkbox => {
                    if (checkbox.value !== 'Todos') {
                        checkbox.checked = false;
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