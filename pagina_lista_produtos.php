<?php include './includes/header.php' ?>

<link rel="stylesheet" href="./Assets/css/pagina_lista_produtos.css">



<?php
    $dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
    $user = 'root';
    $password = '';

    $banco = new PDO($dsn, $user, $password);

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
                    <a class="btn btn-primary" href="#">Abrir</a>
                    <a class="btn btn-warning" href="#">Editar</a>
                    <a class="btn btn-danger" href="#">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</main>


<?php include './includes/footer.php' ?>