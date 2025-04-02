<?php
include './includes/header.php';
require './classe/banco.php';

$id = $_GET['id'];

$conexaoBanco = new cards();
$dados = $conexaoBanco->conexaoBanco();


?>
<link rel="stylesheet" href="./Assets/css/pagina_finalizar_compra.css">



<main>
    <div>
        <h3>Carrinho</h3>
        <table>
            <thead>
                <tr>
                    <th>
                        numeração
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
                    <td>
                        <?php echo $dados['id'] ?>
                    </td>
                    <td>
                        <?php echo $dados['img'] ?>
                    </td>
                    <td>
                        <?php echo $dados['nome'] ?>
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
            <img src="./Assets/Fotos/pagina_finalizar_compra/visa.png" alt="">

            <input type="checkbox" name="" id="">
            <img src="./Assets/Fotos/pagina_finalizar_compra/mastercard.png" alt="">

            <input type="checkbox" name="" id="">
            <img src="./Assets/Fotos/pagina_finalizar_compra/elo.png" alt="">
        </div>

        <button class="btn btn-success">Finalizar compra</button>
    </div>





</main>




<?php include './includes/footer.php' ?>