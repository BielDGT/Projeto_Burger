<?php include './includes/header.php' ?>
<link rel="stylesheet" href="./Assets/css/pagina_ver_produto.css">

<?php

$id_produtos = $_GET['id_produtos'];

$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$select = 'SELECT * FROM tb_produtos WHERE id_produtos = ' . $id_produtos;

$dados = $banco->query($select)->fetch();


?>

<div class="container-ver-produto">
    
    <img src="./Assets/Fotos/pagina_ver_produto/burguer-de-picanha.jpg" alt="" class="foto-produto">

    <form action="">

        <div class="mb-1">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" id="nome" class="form-control" value="<?php echo $dados['nome'] ?>" disabled>
        </div>

        <div class="mb-1">
            <label for="descrição" class="form-label">Descrição</label>
            <input type="text" id="descrição" class="form-control" value="<?php echo $dados['descrição'] ?>" disabled>
        </div>

        <div class="linha mb-1">
            <div class="mb-1">
                <label for="categoria" class="form-label">Categoria</label>
                <input type="text" id="categoria" class="form-control" value="<?php echo $dados['categoria'] ?>" disabled>
            </div>

            <div class="mb-1">
                <label for="valor" class="form-label">Valor</label>
                <input type="text" id="valor" class="form-control" value="<?php echo $dados['valor'] ?>" disabled>
            </div>
        </div>
    </form>
</div>

<?php include './includes/footer.php' ?>