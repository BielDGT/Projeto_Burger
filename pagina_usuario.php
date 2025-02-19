<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php include './includes/header.php' ?>
<link rel="stylesheet" href="./Assets/css/pagina_user.css">

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
    <main id="container-pagina-usuario" class="text-center">
        <section class="row-pagina-usuario" class="text-center">
            <div class="foto-usuario">
            <img src="./Assets/Fotos/pagina_usuario/usuario.png" alt="icone do usuário" class="foto-usuario">
            </div>
            <div class="btn-editar">
                <ol>
                    <li><a href="#">Editar</a></li>
                </ol>
            </div>
            <div class="formulario">

                <?php foreach ($resultado as $lista){?>

                <form>
                    <input type="text" class="formulario-campo" placeholder="Nome" <?php echo $lista['nome'] ?> ><br>
                    <input type="text" class="formulario-campo" placeholder="Email" <?php echo $lista['senha'] ?>><br>
                    <input type="text" class="formulario-campo" placeholder="Senha" <?php echo $lista['email'] ?>><br>
                    <input type="text" class="formulario-campo" placeholder="CPF" <?php echo $lista['cep'] ?>><br>
                    <input type="text" class="formulario-campo" placeholder="Endereço" <?php echo $lista['cpf'] ?>><br>
                    <!-- <?php echo $lista['nome'] ?> -->
                </form>

                <?php }?>

            </div>
        </section>
    </main>
</body>

</html>