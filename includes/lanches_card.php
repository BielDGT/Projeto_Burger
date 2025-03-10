<link rel="stylesheet" href="./Assets/css/comidas_cards.css">

<?php

$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$select = 'SELECT * FROM tb_produtos';

$resultado = $banco->query($select)->fetchAll();

?>
<?php foreach ($resultado as $linha) { ?>
    <div class="coluna">
        <figure>
            <img src="./Assets/Fotos/fotos_cards/<?php echo $linha['img'] ?>" alt="hamburguer">

            <figcaption>
                <h3><?php echo $linha['nome']  ?></h3>
                <a href="./pagina_produto.php?id=<?= $linha['id_produtos'] ?>">VER MAIS</a>
            </figcaption>
        </figure>
    </div>
<?php } ?>