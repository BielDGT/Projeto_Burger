<?php include './includes/header.php' ?>

<link rel="stylesheet" href="./Assets/css/comidas_cards.css">
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

        $dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
        $user = 'root';
        $password = '';

        $banco = new PDO($dsn, $user, $password);

        $select = 'SELECT * FROM tb_produtos';

        $resultado = $banco->query($select)->fetchAll();

        ?>
        <?php foreach ($resultado as $linha) { ?>
            <div class="coluna" data-categoria="<?php echo $linha['categoria']; ?>">
                <figure>
                    <img src="./Assets/Fotos/fotos_cards/<?php echo $linha['img'] ?>" alt="<?php echo $linha['nome']; ?>">
                    <figcaption>
                        <h3><?php echo $linha['nome'] ?></h3>
                        <p><?php echo $linha['categoria'] ?></p>
                        <a href="./pagina_produto.php?id=<?= $linha['id_produtos'] ?>">VER MAIS</a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </main>
</section>

<?php include './includes/footer.php' ?>

<script src="./Assets/js/filtro_pesquisa.js"></script>

</html>