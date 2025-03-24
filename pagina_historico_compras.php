<?php include './includes/header.php' ?>

<link rel="stylesheet" href="./Assets/css/pagina_historico_compras.css">

<?php
$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
$user = 'root';
$password = '';
$banco = new PDO($dsn, $user, $password);
$select = 'SELECT * FROM tb_produtos';
$resultado = $banco->query($select)->fetchAll();
?>

<main>
    <section id="carrinho-de-compras">
        
            <div class="container-painel-carrinho">
                <div class="container-titulo">
                    <h2>CARRINHO DE COMPRAS</h2>
                </div>

                <div class="row-container">
                    <div>
                        <?php ['id_produtos'] ?>
                    </div>
                    <div class="coluna1">
                        <img src="./Assets/Fotos/pagina_historico_compras/Rectangle 13.png" alt="" class="imagem-produto-carrinho">
                    </div>
                    <div class="coluna2">
                        <h3>Hamburguer</h3>
                        <p>Um hamburguer suculento, com carne perfeitamente grelhada, queijo derretido, alface fresca, tomate crocante e molho especial, tudo envolto em um pão macio e levemente tostado. Uma explosão de sabor a cada mordida!</p>
                    </div>
                    <div class="coluna3">
                        <button>REMOVER</button>
                    </div>
                </div>
                <div>
                    <a href="./pagina_finalizar_compra.php">
                        <button>COMPRAR</button>
                    </a>
                </div>
            </div>
        
        </div>


    </section>

</main>

<?php include './includes/footer.php' ?>