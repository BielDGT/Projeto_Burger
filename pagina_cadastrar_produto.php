<link rel="stylesheet" href="./Assets/css/pagina_cad_editar_produto.css">
<?php include './includes/header.php' ?>



<div class="container-cadastrar-editar">
<h2>Cadastrar Produto</h2>

<form action="./produto_cadastrar.php" method="POST">
    <input type="text"  placeholder="Nome" name="nome">

    <input type="text"  placeholder="Descrição" name="descrição">
<div class="linha">
    <input type="text"  placeholder="Categoria" name="categoria">

    <input type="text"  placeholder="Valor" name="valor">
</div>
    

    <button type="submit" class="btn btn-success">Enviar</button>
</form>


</div>




<?php include './includes/footer.php' ?>