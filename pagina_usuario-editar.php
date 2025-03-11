<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php include './includes/header.php' ?>
<link rel="stylesheet" href="./Assets/css/pagina_user.css">
<link rel="stylesheet" href="./Assets/css/footer.css">

</head>

<?php
$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
$user = 'root';
$password = '';
$banco_cliente = new PDO($dsn, $user, $password);

$select = 'SELECT * FROM tb_clientes WHERE id_Clientes=1';

$resultado = $banco_cliente->query($select)->fetch();

?>

<body>
    <main id="container-pagina-usuario" class="text-center">
        <section class="row-pagina-usuario" class="text-center">
            <div class="foto-usuario">
                <img src="./Assets/Fotos/pagina_usuario/usuario.png" alt="icone do usuário" class="foto-usuario">
            </div>
            <div class="btn-editar">
                <ol>
                    <li><a href="./pagina_usuario-editar.php?id_Clientes=<?php echo $resultado['id_Clientes'] ?>" hidden>Salvar</a></li>
                </ol>
            </div>
            <div class="formulario">
                <form action="./usuario-editar.php" method="POST">
                    <input type="text" class="formulario-campo" placeholder="Nome" value="<?php echo $resultado['nome'] ?>"><br>
                    <input type="text" class="formulario-campo" placeholder="Email" value="<?php echo $resultado['email'] ?>"><br>
                    <input type="text" class="formulario-campo" placeholder="Senha" value="<?php echo $resultado['senha'] ?>"><br>
                    <input type="text" class="formulario-campo" placeholder="CPF" value="<?php echo $resultado['cpf'] ?>"><br>
                    <input type="text" class="formulario-campo" placeholder="Endereço" value="<?php echo $resultado['cep'] ?>"><br>
                    <input type="submit">
                </form>
            </div>
        </section>


    </main>
</body>
<?php include './includes/footer.php' ?>

</html>