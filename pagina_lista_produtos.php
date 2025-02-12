<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Assets/css/pagina_lista_produtos.css">
</head>
<body>
    
<?php
$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO ($dsn, $user, $password);

$select = 'SELECT * FROM tb_produtos';

$resultado = $banco->query($select)->fetchALL();
?>

<table>
    <tr>
        <td>
            id
        </td>
        <td>
            nome
        </td>
        <td>
            decrição
        </td>
        <td>
            valor
        </td>
        <td>
            imagem
        </td>
    </tr>
    <?php foreach ($resultado as $lista){ ?>
        <tr>
            <td>
                <?=$lista['id_produtos']?>
            </td>
            <td>
                <?=$lista['nome']?>
            </td>
            <td>
                <?=$lista['descrição']?>
            </td>
            <td>
                <?=$lista['valor']?>
            </td>
            <td>
                <?=$lista['imagem']?>
            </td>
            <td>    <a href="#" class="btn btn-warning" href="#" role="button">Editar</a>
                    <a href="#" class="btn btn-danger" href="#" role="button">Excluir</a>
                </td>
        
        </tr>
    <?php } ?>
</table>

</body>
</html>