<?php include './includes/header.php' ?>

<link rel="stylesheet" href="./assets/css/pagina_pesquisa.css">

<section id="principal">
    <div class="filtro">
        <h3>FILTRO</h3>
        <ol>
            <li><input type="checkbox">Hamburguer</li>
            <li><input type="checkbox">Pizza</li>
            <li><input type="checkbox">Bebidas</li>
            <li><input type="checkbox">Doces</li>
            <li><input type="checkbox">Marmitas</li>
            <li><input type="checkbox">Espetinhos</li>
            <li><input type="checkbox">Massas</li>
            <li><input type="checkbox">Todos</li>
        </ol>
    </div>

    <?php
    $dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
    $user = 'root';
    $password = '';

    $banco = new PDO($dsn, $user, $password);

    $select = "SELECT * FROM tb_produtos";

    $resultado = $banco->query($select)->fetchAll();
    ?>

    <main class="produtos">

    <?php include './includes/lanches_card.php' ?>

    </main>
</section>

<?php include './includes/footer.php' ?>



</html>