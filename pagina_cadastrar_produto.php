<link rel="stylesheet" href="./Assets/css/pagina_cad_editar_produto.css">
<?php include './includes/header.php' ?>



<div class="container-cadastrar-editar">
<h2>Cadastrar Produto</h2>

<form action="">
    <input type="text" name="nome" placeholder="Nome">

    <input type="text" name="descricao" placeholder="Descrição">
<div class="linha">
    <input type="text" name="categoria" placeholder="Categoria">

    <input type="number" class="valor" placeholder="Valor">
</div>
    <input type="file" name="img" accept="image/*">

    <button type="submit" class="btn btn-success">Enviar</button>
</form>


</div>




<?php include './includes/footer.php' ?>