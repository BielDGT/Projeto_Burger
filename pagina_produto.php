<?php include './includes/header.php' ?>

<link rel="stylesheet" href="./Assets/css/pagina_produto.css">
<link rel="stylesheet" href="./Assets/css/comidas_cards.css">

<?php

$id = $_GET['id'];

require './classe/banco.php';

$filmes = new Banco();
$banco = $filmes-> conexaoBanco();

$script = "SELECT * FROM tb_produtos WHERE id_produtos =  $id";

$dados = $banco->query($script)->fetch();

?>

<section id="destaque">
    <div class="local-imagem">
        <img src="./Assets/Fotos/fotos_cards/<?php echo $dados['img'] ?>" class="imagem-principal" alt="foto">
    </div>
    <div class="content">
        <h2><?php echo $dados['nome'] ?></h2>
        <p><?php echo $dados['descrição'] ?></p>
        <span class="categ"><?php echo $dados['categoria'] ?></span>
        <span>R$<?php echo $dados['valor'] ?></span>

        <!-- Formulário para adicionar ao carrinho -->
            <form action="adicionar_carrinho.php" method="post">
                <input type="hidden" name="id_produtos" value="<?php echo $dados['id_produtos'] ?>">
                <input type="hidden" name="img" value="<?php echo $dados['img'] ?>">
                <input type="hidden" name="nome" value="<?php echo $dados['nome'] ?>">
                <input type="hidden" name="descrição" value="<?php echo $dados['descrição'] ?>">
                <input type="hidden" name="categoria" value="<?php echo $dados['categoria'] ?>">
                <input type="hidden" name="valor" value="<?php echo $dados['valor'] ?>">
                <button class="btn">Adicionar</button>
                <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="10" <?php $dados['quantidade'] ?>>
            </form>
    </div>
</section>



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