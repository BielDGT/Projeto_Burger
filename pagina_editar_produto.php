<link rel="stylesheet" href="./Assets/css/pagina_cad_editar_produto.css">
<?php include './includes/header.php';


$id_produto_editar = $_GET['id_produto_editar'];

$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$select = 'SELECT * FROM tb_produtos WHERE id_produtos = ' . $id_produto_editar;

$dados = $banco->query($select)->fetch();

?>



<div class="container-cadastrar-editar">


<form action="./produto_editar.php" method="POST">
<h2>Editar Produto</h2>
<input type="hidden"  placeholder="Nome" name="id" value="<?php echo $id_produto_editar ?>">

    <input type="text" class="largura-definida" placeholder="Nome" name="nome" value="<?=$dados['nome']?>">

    <input type="text"  class="largura-definida" placeholder="Descrição" name="descricao" value="<?=$dados['descrição']?>">
    <div class="linha">
    <input type="text"  placeholder="Categoria" name="categoria" value="<?=$dados['categoria']?>">

    <input type="text"  placeholder="Valor" name="valor" value="<?=$dados['valor']?>">
</div>
    


    <button type="submit" class="btn btn-success">Salvar</button>
</form>


</div>




<?php include './includes/footer.php' ?>