<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<?php include './includes/header.php' ?>


<link rel="stylesheet" href="./Assets/css/pagina_usuario.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="./Assets/css/pagina_usuario.css">

</head>

<section id="banner">
    <main class="carrossel-container">
        <div class="carrossel">
            <img src="./Assets/Fotos/pagina_inicial/banner02.jpg" alt="" class="foto_banner">
            <img src="./Assets/Fotos/pagina_inicial/banner03.jpg" alt="" class="foto_banner">
        </div>
        <button class="anterior" onclick="javascript:anteriorSlide()"><i class="bi bi-arrow-left-square-fill"></i></button>
        <button class="proximo" onclick="javascript:proximoSlide()"><i class="bi bi-arrow-right-square-fill"></i></button>
    </main>
</section>
<!-- AQUI COMEÇA A OPÇÕES DE CATEGORIA DE SUPERMERCADO, VAREJO, MERCADO E IFOOD -->
<section class="menu-categoria">
    <ul>
        <li><a href="#">Restaurante</a></li>
        <li><a href="#">Varejo</a></li>
        <li><a href="#">Mercado</a></li>
        <li><a href="#">IFood</a></li>
    </ul>
</section>
<!-- AQUI TERMINA A PARTE DAS OPÇOES DE CATEGORIA DE SUPERMERCADO, VAREJO, MERCADO E IFOOD -->

<!-- COMEÇA AS OPÇOES DAS COMIDAS COM O BOTÃO DE VERMAIS -->
<section class="opcoes-comidas">
    <main>
        <div class="row">
            <div class="comida col-3">
                <figure>
                    <img src="./Assets/Fotos/pagina_inicial/pizza.jpg" alt="foto de uma pizza de pepperoni" class="foto">
                    <figcaption>
                        <h3>Pizza de pepperoni</h3>
                    </figcaption>
                </figure>
                <ul class="btn-vermais">
                    <li><a href="#">VER MAIS</a></li>
                </ul>
            </div>
            <div class="comida col-3">
                <figure>
                    <img src="./Assets/Fotos/pagina_inicial/pizza.jpg" alt="foto de uma pizza de pepperoni" class="foto">
                    <figcaption>
                        <h3>Pizza de pepperoni</h3>
                    </figcaption>
                </figure>
                <ul class="btn-vermais">
                    <li><a href="#">VER MAIS</a></li>
                </ul>
            </div>
            <div class="comida col-3">
                <figure>
                    <img src="./Assets/Fotos/pagina_inicial/pizza.jpg" alt="foto de uma pizza de pepperoni" class="foto">
                    <figcaption>
                        <h3>Pizza de pepperoni</h3>
                    </figcaption>
                </figure>
                <ul class="btn-vermais">
                    <li><a href="#">VER MAIS</a></li>
                </ul>
            </div>
            <div class="comida col-3">
                <figure>
                    <img src="./Assets/Fotos/pagina_inicial/pizza.jpg" alt="foto de uma pizza de pepperoni" class="foto">
                    <figcaption>
                        <h3>Pizza de pepperoni</h3>
                    </figcaption>
                </figure>
                <ul class="btn-vermais">
                    <li><a href="#">VER MAIS</a></li>
                </ul>
            </div>
            <div class="comida col-3">
                <figure>
                    <img src="./Assets/Fotos/pagina_inicial/pizza.jpg" alt="foto de uma pizza de pepperoni" class="foto">
                    <figcaption>
                        <h3>Pizza de pepperoni</h3>
                    </figcaption>
                </figure>
                <ul class="btn-vermais">
                    <li><a href="#">VER MAIS</a></li>
                </ul>
            </div>
            <div class="comida col-3">
                <figure>
                    <img src="./Assets/Fotos/pagina_inicial/pizza.jpg" alt="foto de uma pizza de pepperoni" class="foto">
                    <figcaption>
                        <h3>Pizza de pepperoni</h3>
                    </figcaption>
                </figure>
                <ul class="btn-vermais">
                    <li><a href="#">VER MAIS</a></li>
                </ul>
            </div>
            <div class="comida col-3">
                <figure>
                    <img src="./Assets/Fotos/pagina_inicial/pizza.jpg" alt="foto de uma pizza de pepperoni" class="foto">
                    <figcaption>
                        <h3>Pizza de pepperoni</h3>
                    </figcaption>
                </figure>
                <ul class="btn-vermais">
                    <li><a href="#">VER MAIS</a></li>
                </ul>
            </div>
            <div class="comida col-3">
                <figure>
                    <img src="./Assets/Fotos/pagina_inicial/pizza.jpg" alt="foto de uma pizza de pepperoni" class="foto">
                    <figcaption>
                        <h3>Pizza de pepperoni</h3>
                    </figcaption>
                </figure>
                <ul class="btn-vermais">
                    <li><a href="#">VER MAIS</a></li>
                </ul>
            </div>

        </div>
    </main>
</section>
<!-- AQUI TERMINA AS OPÇOES DE COMIDA COM O BOTÃO DE VERMAIS -->
</body>
<script src="./Assets/js/carrossel.js"></script>
<?php include './includes/footer.php' ?>

</html>