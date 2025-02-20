<link rel="stylesheet" href="./Assets/css/pagina_inicial.css">
<link rel="stylesheet" href="./Assets/css/footer.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php include './includes/header.php' ?>
</head>
<!-- Carrossel -->
<section class="slide">
    <div class="carrossel">
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!-- slide imagens -->
        <div class="carrossel-imagem primeiro">
            <img src="./Assets/Fotos/pagina_inicial/banner1.jpg" alt="">
        </div>
        <div class="carrossel-imagem">
            <img src="./Assets/Fotos/pagina_inicial/banner2.jpg" alt="">
        </div>
        <div class="carrossel-imagem">
            <img src="./Assets/Fotos/pagina_inicial/banner2.jpg" alt="">
        </div>
        <div class="carrossel-imagem">
            <img src="./Assets/Fotos/pagina_inicial/banner2.jpg" alt="">
        </div>
        <!-- navegação automatica -->
        <div class="navegacao-automatica">
            <div class="btn-auto1"></div>
            <div class="btn-auto2"></div>
            <div class="btn-auto3"></div>
            <div class="btn-auto4"></div>
        </div>

        <div class="manual-navegacao">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>
</section>
<!-- carrossel -->
<!-- COMEÇA AS OPÇOES DAS COMIDAS COM O BOTÃO DE VERMAIS -->
<section class="container-cards text-center">
    <div class="linha">
        <div class="coluna">
            <figure>
                <img src="./Assets/Fotos/pagina_inicial/pizza.jpg" alt="foto de uma pizza de pepperoni" class="foto">
                <figcaption>
                    <h3>Pizza de pepperoni</h3>
                    <ul class="btn-vermais">
                        <li><a href="#">VER MAIS</a></li>
                    </ul>
                </figcaption>
            </figure>
        </div>
        <div class="coluna">
            <figure>
                <img src="./Assets/Fotos/pagina_inicial/pizza.jpg" alt="foto de uma pizza de pepperoni" class="foto">
                <figcaption>
                    <h3>Pizza de pepperoni</h3>
                    <ul class="btn-vermais">
                        <li><a href="#">VER MAIS</a></li>
                    </ul>
                </figcaption>
            </figure>
        </div>
        <div class="coluna">
            <figure>
                <img src="./Assets/Fotos/pagina_inicial/pizza.jpg" alt="foto de uma pizza de pepperoni" class="foto">
                <figcaption>
                    <h3>Pizza de pepperoni</h3>
                    <ul class="btn-vermais">
                        <li><a href="#">VER MAIS</a></li>
                    </ul>
                </figcaption>
            </figure>
        </div>
        <div class="coluna">
            <figure>
                <img src="./Assets/Fotos/pagina_inicial/pizza.jpg" alt="foto de uma pizza de pepperoni" class="foto">
                <figcaption>
                    <h3>Pizza de pepperoni</h3>
                    <ul class="btn-vermais">
                        <li><a href="#">VER MAIS</a></li>
                    </ul>
                </figcaption>
            </figure>
        </div>
        <div class="linha">
        <div class="coluna">
            <figure>
                <img src="./Assets/Fotos/pagina_inicial/pizza.jpg" alt="foto de uma pizza de pepperoni" class="foto">
                <figcaption>
                    <h3>Pizza de pepperoni</h3>
                    <ul class="btn-vermais">
                        <li><a href="#">VER MAIS</a></li>
                    </ul>
                </figcaption>
            </figure>
        </div>

        <div class="coluna">
            <figure>
                <img src="./Assets/Fotos/pagina_inicial/pizza.jpg" alt="foto de uma pizza de pepperoni" class="foto">
                <figcaption>
                    <h3>Pizza de pepperoni</h3>
                    <ul class="btn-vermais">
                        <li><a href="#">VER MAIS</a></li>
                    </ul>
                </figcaption>
            </figure>
        </div>
        <div class="coluna">
            <figure>
                <img src="./Assets/Fotos/pagina_inicial/pizza.jpg" alt="foto de uma pizza de pepperoni" class="foto">
                <figcaption>
                    <h3>Pizza de pepperoni</h3>
                    <ul class="btn-vermais">
                        <li><a href="#">VER MAIS</a></li>
                    </ul>
                </figcaption>
            </figure>
        </div>
        <div class="coluna">
            <figure>
                <img src="./Assets/Fotos/pagina_inicial/pizza.jpg" alt="foto de uma pizza de pepperoni" class="foto">
                <figcaption>
                    <h3>Pizza de pepperoni</h3>
                    <ul class="btn-vermais">
                        <li><a href="#">VER MAIS</a></li>
                    </ul>
                </figcaption>
            </figure>
        </div>
        </div>
        
    </div>
</section>
<!-- AQUI TERMINA AS OPÇOES DE COMIDA COM O BOTÃO DE VERMAIS -->
</body>

<?php include './includes/footer.php' ?>

</html>