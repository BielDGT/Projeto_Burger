<?php
include './includes/header.php';

$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';

$user = 'root';

$password = '';

$banco = new PDO($dsn, $user, $password);

$id_pessoa_imprimir = $_SESSION['id_pessoa'];

$script = 'SELECT
tb_pessoa.nome,
tb_produtos.nome,
tb_produtos.descrição,
tb_produtos.img,
tb_carrinho.quantidade,
tb_produtos.valor
FROM tb_carrinho  
INNER JOIN tb_pessoa ON tb_pessoa.id = tb_carrinho.id_pessoa
INNER JOIN tb_produtos ON tb_produtos.id_produtos = tb_carrinho.id_produto
WHERE tb_carrinho.id_pessoa = ' . $id_pessoa_imprimir;



// 'SELECT tb_pessoa.*, tb_produtos.*, tb_carrinho.*
// FROM tb_carrinho
// INNER JOIN tb_pessoa ON tb_pessoa.id = tb_carrinho.id_pessoa
// INNER JOIN tb_produtos ON tb_produtos.id_produtos = tb_carrinho.id_produto
// WHERE tb_carrinho.id_pessoa = ' . $id_pessoa_imprimir;


$resultado = $banco->prepare($script);

$resultado->execute();
?>

<link rel="stylesheet" href="./Assets/css/pagina_finalizar_compra.css">



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
                <?php foreach ($resultado as $linha) { ?>
                    <tr>
                        <td>
                            <img src="./Assets/Fotos/fotos_cards/<?php echo $linha['img'] ?>" class="imagem-principal" alt="foto do produto">
                        </td>
                        <td>
                        <?= $linha['nome'] ?>
                        </td>
                        <td>
                        <?= $linha['valor'] ?>
                        </td>
                        <td>
                            2x
                        </td>
                        <td>
                            50,00
                        </td>
                    </tr>
                <?php } ?>
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