

<link rel="stylesheet" href="./assets/css/pagina_cad_editar_produto.css">
<?php include './includes/header.php';

$id_produto_editar = $_GET['id_produto_editar'];


require './classe/banco.php';

$filmes = new Banco();
$banco = $filmes-> conexaoBanco();

$select = 'SELECT * FROM tb_produtos WHERE id_produtos = ' . $id_produto_editar;

$dados = $banco->query($select)->fetch();

?>



<div class="container-cadastrar-editar">


    <form enctype="multipart/form-data" action="./produto_editar.php" method="POST">
        <h2>Editar Produto</h2>
        <input type="hidden"  placeholder="Id" name="id" value="<?php echo $id_produto_editar ?>">

        <input type="text" class="largura-definida" placeholder="Nome" name="nome" value="<?=$dados['nome']?>" required>

        <textarea rows="4" cols="50" class="largura-definida" placeholder="Descrição" name="descricao" value="<?=$dados['descrição']?>" required></textarea>

        <div class="linha">
            <select id="opcoes" name="categoria" placeholder="Categoria" required>
                <option value="Hamburguer">Hamburguer</option>
                <option value="Pizza">Pizza</option>
                <option value="Bebidas">Bebidas</option>
                <option value="Guarnição">Guarnição</option>
                <option value="Sanduiche">Sanduiche</option>
            </select>
            <div>
                <label for="valor">R$</label>
                <input type="text" placeholder="Valor" name="valor" value="<?=$dados['valor']?>" required>
            </div>
        </div>

        <input id="img-input" type="file" name="imagem" accept="image/*" onchange="previewImage(event)" required>
<div id="img-container">
    <img id="preview" src="./assets/fotos/fotos_cards/<?=$dados['img']?>" alt="Pré-visualização da imagem" class="foto_produto" />
</div>

        <button type="submit" class="btn btn-success">Enviar</button>
    </form>


</div>




<?php include './includes/footer.php' ?>

<script src="./assets/js/upImg.js"></script>