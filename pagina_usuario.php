<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<?php include './includes/header.php' ?>


<link rel="stylesheet" href="./Assets/css/pagina_usuario.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="./Assets/css/pagina_pesquisa.css">

</head>

<?php
$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
$user = 'root';
$password = '';
$banco_cliente = new PDO($dsn, $user, $password);

$select = 'SELECT * FROM tb_clientes';

$resultado = $banco_cliente->query($select)->fetchAll();

?>

<body>
    <main id="pagina_usuario_padrao" class="text-center">
        <section class="row-pagina-usuario">
            <div class="col-1">
                <img src="./Assets/Fotos/pagina_usuario/usuario.png" alt="icone do usuário" class="foto-usuario">
                <ol>
                    <li>Cliente</li>
                </ol>
                <?php foreach ($resultado as $lista){?>

                <form>
                    <input type="text" class="formulario" placeholder="Nome" <?php echo $lista['nome'] ?> >
                    <input type="text" class="formulario" placeholder="Email" <?php echo $lista['senha'] ?>>
                    <input type="text" class="formulario" placeholder="Senha" <?php echo $lista['email'] ?>>
                    <input type="text" class="formulario" placeholder="CPF" <?php echo $lista['cep'] ?>>
                    <input type="text" class="formulario" placeholder="Endereço" <?php echo $lista['cpf'] ?>>
                    <?php echo $lista['nome'] ?>
                </form>

                <?php }?>

            </div>
        </section>
    </main>
</body>
<?php include './includes/footer.php' ?>

</html>