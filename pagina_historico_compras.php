<?php include './includes/header.php';?>

<link rel="stylesheet" href="./Assets/css/pagina_historico_compras.css">
<main>
    <section id="carrinho-de-compras">
        <table class="container-painel-carrinho">
            <tr class="container-titulo">
                <td>
                    <h2>🛒 Seu Carrinho</h2>
                </td>
            </tr>

            <?php
            // Verifica se o carrinho não está vazio
            if (!empty($_SESSION['cart'])) {
            ?>
                <?php foreach ($_SESSION['cart'] as $id => $item) { ?>
                    <tr class="row-container">
                        <td>
                            <img src="./Assets/Fotos/fotos_cards/<?php echo $item['img'] ?>" alt="foto da comida">
                        </td>
                        <td>
                            <?= $item['nome']; ?>
                        </td>
                        <td>
                            <?= $item['valor']; ?>
                        </td>
                        <td>
                            <?= $item['quantidade']; ?>
                        </td>
                        <td class="coluna3">
                            <form action="remover_carrinho.php" method="post">
                                <input type="hidden" name="id_produtos" value="<?= $id ?>">
                                <button type="submit">REMOVER</button>

                            </form>
                        </td>
                    </tr>
                <?php } // Fecha o foreach corretamente 
                ?>
                <div id="mensagem" class="hidden">
                    <h3 class="text-center">Seu pedido está a caminho!</h3>
                </div>
            <?php } else { ?>
                <!-- Mensagem exibida caso o carrinho esteja vazio -->
                <p>Seu carrinho está vazio.</p>
            <?php } ?>
            <tr>
                <td class="fonte">
                    <h2 class="total">TOTAL:
                        <?php
                        $total = 0;
                        foreach ($_SESSION['cart'] as $item) {
                            $total += $item['valor'] * $item['quantidade'];
                        }
                        echo "R$" . number_format($total, 2, ',', ',');

                        ?>
                    </h2>
                </td>
            </tr>

            <td>
                <button id="enviar" type="submit">Enviar Pedido </button>
            </td>
        </table>

        </div>


    </section>

</main>
<script src="./Assets/js/mensagem.js"></script>
<?php include './includes/footer.php' ?>