<link rel="stylesheet" href="./Assets/css/pagina_cad_editar_produto.css">
<?php include './includes/header.php' ?>



<div class="container-cadastrar-editar">


    <form enctype="multipart/form-data" action="./produto_cadastrar.php" method="POST">
        <h2>Cadastrar Produto</h2>
        <input type="text" class="largura-definida" placeholder="Nome" name="nome" required>

        <textarea rows="4" cols="50" class="largura-definida" placeholder="Descrição" name="descricao" required></textarea>

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
                <input type="text" placeholder="Valor" name="valor" required>
            </div>
        </div>

        <input id="img-input" type="file" name="imagem" accept="image/*" onchange="previewImage(event)" required>
<div id="img-container">
    <img id="preview" src="./Assets/Fotos/fotos_cards/produto.png" alt="Pré-visualização da imagem" class="foto_produto" />
</div>

        <button type="submit" class="btn btn-success">Enviar</button>
    </form>


</div>




<?php include './includes/footer.php' ?>

<script src="./Assets/js/upImg.js"></script>