<link rel="stylesheet" href="./Assets/css/pagina_cad_editar_produto.css">
<?php include './includes/header.php' ?>



<div class="container-cadastrar-editar">


<form action="./produto_cadastrar.php" method="POST">
<h2>Cadastrar Produto</h2>
    <input type="text" class="largura-definida" placeholder="Nome" name="nome">

    <input type="text" class="largura-definida"  placeholder="Descrição" name="descricao">
<div class="linha">
    <input type="text"  placeholder="Categoria" name="categoria">

    <input type="text"  placeholder="Valor" name="valor">
</div>
    
<input type="file" name="imagem" accept="image/*"> 

    <button type="submit" class="btn btn-success">Enviar</button>
</form>


</div>




<?php include './includes/footer.php' ?>