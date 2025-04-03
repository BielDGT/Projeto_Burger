<?php include './includes/header.php';



?>

<link rel="stylesheet" href="./Assets/css/pagina_historico_compras.css">

   
<main>
    <section id="carrinho-de-compras">
        
            <table class="container-painel-carrinho">
                <tr class="container-titulo">
                    <td><h2>🛒 Seu Carrinho</h2></td>
                </tr>

                <?php 
// Verifica se o carrinho não está vazio
if (!empty($_SESSION['cart'])) { 
?> 
    <?php foreach ($_SESSION['cart'] as $id => $item) { ?>
        <tr class="row-container">
            <td class="coluna1">
                <img src="./Assets/Fotos/fotos_cards/<?= $item['img'] ?>" class="imagem-principal" alt="foto do produto">
            </td>
            <td class="coluna2">
                <h3>
                    <?= $item['nome']; ?>
                </h3>
                <p>
                    <?= $item['descricao']; ?>
                </p>
            </td>
            <td class="coluna3">
                <form action="remover_carrinho.php" method="post">
                    <input type="hidden" name="id_produtos" value="<?= $id?>">
                <button type="submit">REMOVER</button>
                
            </form>
            </td>
        </tr>
    <?php } // Fecha o foreach corretamente ?>
<?php } else { ?>
    <!-- Mensagem exibida caso o carrinho esteja vazio -->
    <p>Seu carrinho está vazio.</p>
<?php } ?>


                <td>
                    <a href="./pagina_finalizar_compra.php">COMPRAR</a>
                </td>
            </table>
        


        </div>


    </section>

</main>

<?php include './includes/footer.php' ?>