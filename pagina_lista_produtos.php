<?php include './includes/header.php' ?>





<?php
    $dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
    $user = 'root';
    $password = '';

    $banco = new PDO($dsn, $user, $password);

    $select = "SELECT * FROM tb_produtos";

    $resultado = $banco->query($select)->fetchAll();
?>

<main class="">
    <table class="tabela-produtos">
        <div class="my-3 d-flex justify-content-end">
            <a href="" class="btn btn-success">Cadastrar Novo Produto</a>
        </div>
        <tr>
            <td> id </td>
            <td> imagem </td>
            <td> nome </td>
            <td> Ação </td>
        </tr>
        <?php foreach ($resultado as $linha) { ?>
            <tr>
                <td> <?= $linha['id_produtos'] ?> </td>
                <td></td>
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
</body>

</html>