<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador com Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .contador-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin: 2rem;
        }

        .valor-contador {
            font-size: 1.5rem;
            min-width: 50px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container text-center mt-5">
        <h2 class="mb-4">Contador Simples</h2>
        <div class="contador-container">
            <button class="btn btn-danger btn-lg" id="diminuir">-</button>
            <span class="valor-contador" id="contador">0</span>
            <button class="btn btn-success btn-lg" id="aumentar">+</button>
        </div>
        <p class="mt-3 text-muted">Clique nos botões para alterar o valor</p>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Elementos do DOM
        const elementoContador = document.getElementById('contador');
        const botaoAumentar = document.getElementById('aumentar');
        const botaoDiminuir = document.getElementById('diminuir');

        // Valor inicial do contador
        let contador = 0;

        // Função para atualizar o contador na tela
        function atualizarContador() {
            elementoContador.textContent = contador;

            // Opcional: muda a cor se for negativo
            if (contador < 0) {
                elementoContador.style.color = 'red';
            } else {
                elementoContador.style.color = 'black';
            }
        }

        // Eventos dos botões
        botaoAumentar.addEventListener('click', function() {
            contador++;
            atualizarContador();
        });

        botaoDiminuir.addEventListener('click', function() {
            contador--;
            atualizarContador();
        });

        // Inicializa o contador
        atualizarContador();
    </script>
</body>
</html>