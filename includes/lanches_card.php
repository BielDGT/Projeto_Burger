<link rel="stylesheet" href="./Assets/css/comidas_cards.css">

<?php

$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$resultado = $banco->query($select)->fetchAll();

?>
<?php foreach ($resultado as $linha) { ?>
            <div class="coluna">

            <div class="coluna" data-categoria="<?php echo $linha['categoria']; ?>">

                <figure>
                    <img src="./Assets/Fotos/fotos_cards/<?php echo $linha['img'] ?>" alt="hamburguer">

                    <figcaption>
                        <h3><?php echo $linha['nome']  ?></h3>
                        <!-- <button onclick="adicionarAoCarrinho('Produto 1', 30)">Adicionar ao Carrinho</button> -->
                        <br>
                        <br>

                        <p><?php echo $linha['categoria'] ?></p>
                        <button onclick="adicionarAoCarrinho('Produto 1', 30)">Adicionar ao Carrinho</button>
                        <br><br>

                        <a href="./pagina_produto.php?id=<?= $linha['id_produtos'] ?>">VER MAIS</a>
                    </figcaption>
                </figure>
            </div>
<?php } ?>
