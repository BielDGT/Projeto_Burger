<link rel="stylesheet" href="./Assets/css/pagina_cad_editar_produto.css">
<?php include './includes/header.php' ?>



<div class="container-cadastrar-editar">


    <form action="./produto_cadastrar.php" method="POST">
        <h2>Cadastrar Produto</h2>
        <input type="text" class="largura-definida" placeholder="Nome" name="nome">

        <textarea rows="4" cols="50" class="largura-definida" placeholder="Descrição" name="descricao"></textarea>

        <div class="linha">
            <select id="opcoes" name="categoria" placeholder="Categoria">
                <option value="Hamburguer">Hamburguer</option>
                <option value="Pizza">Pizza</option>
                <option value="Bebidas">Bebidas</option>
                <option value="Guarnição">Guarnição</option>
                <option value="Sanduiche">Sanduiche</option>
            </select>

            <input type="text" placeholder="Valor" name="valor">
        </div>

        <input type="file" name="imagem" accept="image/*">

        <button type="submit" class="btn btn-success">Enviar</button>
    </form>


</div>




<?php include './includes/footer.php' ?>