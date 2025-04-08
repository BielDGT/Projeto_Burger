<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="./Assets/css/carrossel.css">

<section id="banner">
        <!-- id é um identificador unico, ao contrario dda classe que existe varias -->
        <main class="carrossel-container">
            <div class="carrossel">
                <img src="./assets/fotos/pagina_inicial/banner01.jpg" alt="Banner_00">
                <img src="./assets/fotos/pagina_inicial/banner02.jpg" alt="Banner_00">
                <img src="./assets/fotos/pagina_inicial/banner03.jpg" alt="Banner_00">

            </div>
            <!-- precisa colocar todas as imagens dentro de um identificador -->
            <button class="anterior" onclick="javascript:anteriorSlide()"><i class="bi bi-arrow-left"></i></button>
            <button class="proximo" onclick="javascript:proximoSlide()"><i class="bi bi-arrow-right"></i></button>
        </main>
</section>
<script src="./assets/js/carrossel.js"></script>