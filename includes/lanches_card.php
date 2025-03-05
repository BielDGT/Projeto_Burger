
<link rel="stylesheet" href="../Assets/css/comidas_cards.css">

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
        <!-- se começa primeiro a tag  figure para prossegir com o figcapture  -->
        <!-- <img src="./Assets/Fotos/pagina_inicial/<?php echo $linha ['Imagem']  ?>" alt="imagem da comida" > -->
        <figcaption>
            <h3><?php echo $linha ['nome']  ?></h3>
            <ul class="btn-vermais">
                <li><a href="#">VER MAIS</a></li>
            </ul>
        </figcaption>
    </figure>
</div>
<?php } ?>
