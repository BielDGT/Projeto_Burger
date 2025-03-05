<?php include './includes/header.php' ?>

    <link rel="stylesheet" href="./Assets/css/pagina_produto.css">

    <?php 

$id= $_GET['id'];

$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$select = "SELECT * FROM tb_produtos WHERE id_produtos =  $id" ;

$dados = $banco->query($select)->fetch();

?>

    <section id="destaque">
        <div class="local-imagem">
            <img src="./Assets/Fotos/pagina_produto/burger.jpg" class="imagem-principal" alt="">
        </div>
        <div class="content">
            <h2><?php echo $dados['nome'] ?></h2>
            <p><?php echo $dados['descrição'] ?></p>
            <span class="categ"><?php echo $dados['categoria'] ?></span>
            <span>R$<?php echo $dados['valor'] ?></span>
            <button class=" btn ">Adicionar</button>
            <button class=" btn ">Comprar</button>
        </div>
    </section>
    <section id="container recomendação">
        <div class="container-cards">

            <div class="cards">
                <figure>
                    <img src="./Assets/Fotos/pagina_produto/burger.jpg" alt="burger" class="img">
                    <figcaption>
                        <h4>Burger</h4>
                        <div>
                        <a href="#">ver mais</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="cards">
                <figure>
                    <img src="./Assets/Fotos/pagina_produto/burger.jpg" alt="burger" class="img">
                    <figcaption>
                        <h4>Burger</h4>
                        <a href="#">ver mais</a>
                    </figcaption>
                </figure>
            </div>
            <div class="cards">
                <figure>
                    <img src="./Assets/Fotos/pagina_produto/burger.jpg" alt="burger" class="img">
                    <figcaption>
                        <h4>Burger</h4>
                        <a href="#">ver mais</a>
                    </figcaption>
                </figure>
            </div>
            <div class="cards">
                <figure>
                    <img src="./Assets/Fotos/pagina_produto/burger.jpg" alt="burger" class="img">
                    <figcaption>
                        <h4>Burger</h4>
                        <a href="#">ver mais</a>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>

    <?php include './includes/footer.php' ?>
    
</body>

</html>