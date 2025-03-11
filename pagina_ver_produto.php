
<?php include './includes/header.php' ?>

<?php 

$id_produtos = $_GET['id_produtos'];

$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$select = 'SELECT * FROM tb_produtos WHERE id_produtos = ' . $id_produtos;

$dados = $banco->query($select)->fetch();


?>
    
    
    <h2>Cadastro de Produto</h2>
    <img src="./Assets/Fotos/pagina_produto/burger.jpg" alt="">

    <form action="">

        <label for="nome">Nome</label>
        <input type="text" value="<?php echo $dados ['nome']?>" disabled >
        
        <label for="descrição">Descrição</label>
        <input type="text" value="<?php echo $dados ['descrição']?>" disabled >


        <div class="row mt-2">

        <label for="categoria">Categoria</label>
        <input type="text" value="<?php echo $dados ['categoria']?>" disabled >

        <label for="valor">Valor</label>
        <input type="text" value="<?php echo $dados ['valor']?>" disabled >
</div>

    </form>


    <?php include './includes/footer.php'?>