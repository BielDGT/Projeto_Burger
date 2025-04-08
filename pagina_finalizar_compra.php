<?php
include './includes/header.php';
?>


<link rel="stylesheet" href="./assets/css/pagina_finalizar_compra.css">

<!-- <?php

        $id = $_POST['id_produtos'];

        require './classe/banco.php';

        $filmes = new Banco();
        $banco = $filmes-> conexaoBanco();

        $script = "SELECT * FROM tb_produtos WHERE id_produtos =  $id";

        $dados = $banco->query($script)->fetch();

        ?> -->
<main>
    <div>
        <h3>Carrinho</h3>

        <table>
            <thead>
                <tr>

                    <th>
                        foto
                    </th>
                    <th>
                        Comida
                    </th>
                    <th>
                        Preço
                    </th>
                    <th>
                        Quantidade
                    </th>
                    <th>
                        Total
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <?php $dados['id_produtos'] ?>

                    <td>
                        <img src="./assets/fotos/<?= ('fotos_cards/' . $dados['img']) ?>" alt="foto" class="foto ">
                    </td>
                    <td>
                    <?php
                    session_start();
                    $_SESSION['nome'] = $dados['nome'];
                    ?>
                        
                    </td>
                    <td>
                        <?php echo $dados['valor'] ?>
                    </td>
                    <td>
                        2x
                    </td>
                    <td>
                        50,00
                    </td>
                </tr>

            </tbody>

        </table>
    </div>



    <div class="painel-finalizar-compra">
        <h3>Total da Compra</h3>

        <div class="linha-preco-total">

            <strong>Total</strong>
            <span>50,00</span>

        </div>

        <div class="linha-formato-pagamento">
            <input type="checkbox" name="" id="">
            <img src="./assets/fotos/pagina_finalizar_compra/visa.png" alt="">

            <input type="checkbox" name="" id="">
            <img src="./assets/fotos/pagina_finalizar_compra/mastercard.png" alt="">

            <input type="checkbox" name="" id="">
            <img src="./assets/fotos/pagina_finalizar_compra/elo.png" alt="">
        </div>

        <button class="btn btn-success">Finalizar compra</button>
    </div>





</main>


<?php include './includes/footer.php' ?>