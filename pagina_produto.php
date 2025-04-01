<?php include './includes/header.php' ?>

<link rel="stylesheet" href="./Assets/css/pagina_produto.css">
<link rel="stylesheet" href="./Assets/css/comidas_cards.css">

<?php

$id = $_GET['id'];

$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$script = "SELECT * FROM tb_produtos WHERE id_produtos =  $id";

$dados = $banco->query($script)->fetch();

?>
<form action="./pagina_historico_compras.php" method="GET">
    <section id="destaque">
        <div class="local-imagem">
            <img src="./Assets/Fotos/fotos_cards/<?php echo $dados['img'] ?>" class="imagem-principal" alt="foto">
        </div>
        <div class="content">
            <h2><?php echo $dados['nome'] ?></h2>
            <p><?php echo $dados['descrição'] ?></p>
            <span class="categ"><?php echo $dados['categoria'] ?></span>
            <span>R$<?php echo $dados['valor'] ?></span>
            <form action="./conexão.php" method="GET">
                <a class="btn" href="./pagina_historico_compras.php?id_produtos=<?php echo $dados['id_produtos'] ?>">Adicionar</a>
            </form>
            <a href="./pagina_finalizar_compra.php" class=" btn ">Comprar</a>
        </div>
    </section>
</form>


<section id="container recomendação">

    <div class="container-cards">

        <?php

        $select = 'SELECT * FROM tb_produtos ORDER BY RAND() LIMIT 4';

        $resultado = $banco->query($select)->fetchAll();
        include './includes/lanches_card.php';
        ?>
        
    </div>
</section>

<?php include './includes/footer.php' ?>

</body>

</html>