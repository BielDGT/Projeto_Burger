<?php include './includes/header.php' ?>

<link rel="stylesheet" href="./assets/css/comidas_cards.css">
<link rel="stylesheet" href="./assets/css/pagina_pesquisa.css">

<section id="principal">
    
    <div class="filtro">
        <h3>FILTRO</h3>
        <ol>
            <li><input type="checkbox" id="hamburguer" value="Hamburguer">Hamburguer</li>
            <li><input type="checkbox" id="pizza" value="Pizza">Pizza</li>
            <li><input type="checkbox" id="bebidas" value="Bebidas">Bebidas</li>
            <li><input type="checkbox" id="guarnição" value="Guarnição">Guarnição</li>
            <li><input type="checkbox" id="sanduiche" value="Sanduiche">Sanduiche</li>
            <!-- <li><input type="checkbox" id="espetinhos" value="Espetinhos">Espetinhos</li>
            <li><input type="checkbox" id="massas" value="Massas">Massas</li> -->
            <li><input type="checkbox" id="todos" value="Todos">Todos</li>
        </ol>
    </div>

    <main class="produtos"> 
        <?php

require './classe/banco.php';

$filmes = new Banco();
$banco = $filmes-> conexaoBanco();

        $select = 'SELECT * FROM tb_produtos';

        $resultado = $banco->query($select)->fetchAll();
        
        include './includes/lanches_card.php';
        ?>
        
    </main>
</section>

<?php include './includes/footer.php' ?>

<script src="./assets/js/filtro_pesquisa.js"></script>

</html>