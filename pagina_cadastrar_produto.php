<link rel="stylesheet" href="./assets/css/pagina_cad_editar_produto.css">
<?php include './includes/header.php';

if (isset($_GET['erro'])) {
    $erro = $_GET['erro'];
    $mensagem = ''; // Variável para a mensagem de erro

    switch ($erro) {
        case 'tipo_invalido':
            $mensagem = 'Erro: Tipo de arquivo inválido. Tipos permitidos: JPG, JPEG, PNG, GIF.';
            break;
        case 'tamanho_excedido':
            $mensagem = 'Erro: O tamanho do arquivo excede o limite de 5MB.';
            break;
        case 'upload_failed':
            $mensagem = 'Erro: Falha ao realizar o upload da imagem.';
            break;
    }

    // Se houver mensagem de erro, executa o script para mostrar o popup
    if ($mensagem) {
        echo "<script type='text/javascript'>
                alert('$mensagem');
              </script>";
    }
}
?>



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
    <img id="preview" src="./assets/fotos/fotos_cards/produto.png" alt="Pré-visualização da imagem" class="foto_produto" />
</div>

        <button type="submit" class="btn btn-success">Enviar</button>
    </form>


</div>




<?php include './includes/footer.php' ?>

<script src="./assets/js/upImg.js"></script>