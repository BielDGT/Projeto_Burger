


<?php include './includes/header.php' ?>

<link rel="stylesheet" href="./Assets/css/pagina_lista_produtos.css">


<?php
    require './classe/banco.php';

    $filmes = new Banco();
    $banco = $filmes-> conexaoBanco();

    $select = "SELECT * FROM tb_produtos";

    $resultado = $banco->query($select)->fetchAll();
?>

<main class = "container-tabela">
    
        <h2>Lista de produtos</h2>
    
    <table>
        <tr>
            <th> Id </td>
           
            <th> Nome </td>
            <th> Ação </td>
        </tr>
        <?php foreach ($resultado as $linha) { ?>
            <tr>
                <td> <?= $linha['id_produtos'] ?> </td>
                
                <td> <?php echo $linha['nome'] ?> </td>
                <td class="">
                    <a class="btn btn-primary" href="./pagina_ver_produto.php?id_produtos=<?= $linha['id_produtos']?>">Ver</a>
                    <a class="btn btn-warning" href="./pagina_editar_produto.php?id_produto_editar=<?= $linha['id_produtos']?>">Editar</a>
                    <a class="btn btn-danger" href="./produto_deletar.php?id_produtos=<?= $linha['id_produtos']?>">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</main>


<?php include './includes/footer.php'?>