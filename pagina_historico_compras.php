<?php include './includes/header.php' ?>

<link rel="stylesheet" href="./Assets/css/pagina_historico_compras.css">

<?php
$id = $_GET['id_produtos'];

$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
$user = 'root';
$password = '';
$banco = new PDO($dsn, $user, $password);
$select = "SELECT * FROM tb_produtos WHERE id_produtos = $id";
$resultado = $banco->query($select)->fetch();
?>

<?php
// Inicia a sessão
session_start();
?>

<main>
    <section id="carrinho-de-compras">

        <table class="container-painel-carrinho">
            <tr class="container-titulo">
                <td>CARRINHO DE COMPRAS</td>
            </tr>
            <tr class="row-container">
                <td>
                <?php $resultado['id_produtos'] ?>
                </td>
                <td class="coluna1">
                    <img src="./Assets/Fotos/fotos_cards/<?php echo $resultado['img'] ?>" class="imagem-principal" alt="foto do produto">
                </td>
                <td class="coluna2">
                    <h3><?php echo $resultado['nome'] ?></h3>
                    <p><?php echo $resultado['descrição'] ?></p>
                </td>
                <td class="coluna3">
                    <a href="./aluno.php?id=<?php echo $linha['Id'] ?>">REMOVER</a>
                </td>
            </tr>
            <td>
                <a href="./pagina_finalizar_compra.php">
                    <button>COMPRAR</button>
                </a>
            </td>
        </table>

        </div>


    </section>

</main>

<?php include './includes/footer.php' ?>