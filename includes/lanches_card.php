<link rel="stylesheet" href="./Assets/css/comidas_cards.css">

<?php foreach ($resultado as $linha) { ?>
            <div>
                <figure>
                    <img src="./assets/Fotos/fotos_cards/hamburguer.png" alt="hamburguer">
                    <figcaption><?php echo $linha['nome'] ?></figcaption>
                    <a href="./pagina_produto.php?id=<?=$linha['id_produtos'] ?>">VER MAIS</a>
                </figure>

            </div>
        <?php } ?>