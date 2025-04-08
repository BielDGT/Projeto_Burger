<link rel="stylesheet" href="./assets/css/comidas_cards.css">

<?php
require_once './classe/banco.php';

$filmes = new Banco();
$banco = $filmes-> conexaoBanco();

$resultado = $banco->query($select)->fetchAll();

?>
<?php foreach ($resultado as $linha) { ?>

            <div class="coluna" data-categoria="<?php echo $linha['categoria']; ?>">

                <figure>
                    <img src="./assets/fotos/fotos_cards/<?php echo $linha['img'] ?>" alt="hamburguer">

                    <figcaption>
                        <h3><?php echo $linha['nome']  ?></h3>
                        <p><?php echo $linha['categoria'] ?></p>
                        <br><br>

                        <a href="./pagina_produto.php?id=<?= $linha['id_produtos'] ?>">VER MAIS</a>
                    </figcaption>
                </figure>
            </div>
            
<?php } ?>
