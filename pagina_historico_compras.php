<?php include './includes/header.php';

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
tb_carrinho.quantidade
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

<link rel="stylesheet" href="./Assets/css/pagina_historico_compras.css">

   
<main>
    <section id="carrinho-de-compras">
        <form action="./pagina_finalizar_compra" method="get">
            <table class="container-painel-carrinho">
                <tr class="container-titulo">
                    <td>CARRINHO DE COMPRAS</td>
                </tr>
                <?php foreach ($resultado as $linha) { ?>
                <tr class="row-container">
                    <td class="coluna1">
                    <img src="./Assets/Fotos/fotos_cards/<?php echo $linha['img'] ?>" class="imagem-principal" alt="foto do produto">
                    </td>
                    <td class="coluna2">
                        <h3>
                          <?= $linha['nome'] ?>
                        </h3>
                        <p><?= $linha['descrição']?></p>
                    </td>
                    <td class="coluna3">
                        <a href="#"><button>REMOVER</button></a>
                    </td>
                </tr>
                <?php } ?>

                <td>
                        <a href="./pagina_finalizar_compra.php">COMPRAR</a>
                </td>
            </table>
        </form>


        </div>


    </section>

</main>

<?php include './includes/footer.php' ?>