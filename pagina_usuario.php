<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<?php


if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET) && $_GET['sair'] == 'true') {
    session_destroy();
    header('location:index.php');
}


if (empty($_SESSION) && !isset($_SESSION['id_pessoa'])){
    header('location:usuario-login.php');

}

?>
<link rel="stylesheet" href="./Assets/css/pagina_user.css">
<link rel="stylesheet" href="./Assets/css/footer.css">

</head>

<?php
$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
$user = 'root';
$password = '';
$banco_cliente = new PDO($dsn, $user, $password);

$select = "SELECT * FROM tb_pessoa INNER JOIN tb_usuario ON tb_pessoa.id = tb_usuario.id_pessoa WHERE tb_usuario.id_pessoa = {$_SESSION['id_pessoa']} " ;


$resultado = $banco_cliente->query($select)->fetch();

?>

<body>
    <main id="container-pagina-usuario" class="text-center">
        <section class="row-pagina-usuario" class="text-center">

            <div class="foto_usuario">
                <img src="./Assets/Fotos/fotos_usuarios/<?php 
                    // Verifica se o campo 'img' não está vazio
                    if (!empty($resultado['img'])) {
                        echo $resultado['img']; // Exibe a imagem do usuário se existir
                    } else {
                        echo 'usuario.png'; // Caso contrário, exibe a imagem padrão
                    }
                ?>" 
                alt="icone do usuário" class="foto-usuario">
            </div>

            <div class="btn-editar">
                <ol>
                    <li><a href="./status.php?sair=true " class="btn btn-roxo">Sair</a></li>
                </ol>
            </div>
            <div class="btn-editar">
                <ol>
                    <li><a href="./pagina_usuario-editar.php?id=<?php echo $resultado['id'] ?>">Editar</a></li>
                </ol>
            </div>
            <div class="formulario">
                <form>
                    <input type="text" class="formulario-campo" placeholder="usuario" value="<?php echo $resultado['usuario'] ?>" disabled><br>
                    <input type="text" class="formulario-campo" placeholder="Senha" value="<?php echo $resultado['senha'] ?>" disabled><br>

                    <input type="text" class="formulario-campo" placeholder="Nome" value="<?php echo $resultado['nome'] ?>" disabled><br>
                    <input type="text" class="formulario-campo" placeholder="Email" value="<?php echo $resultado['email'] ?>" disabled><br>
                    <input type="text" class="formulario-campo" placeholder="CPF" value="<?php echo $resultado['cpf'] ?>" disabled><br>
                    <input type="text" class="formulario-campo" placeholder="Endereço" value="<?php echo $resultado['cep'] ?>" disabled><br>
                    <input type="text" class="formulario-campo" placeholder="nascimento" value="<?php echo $resultado['nascimento'] ?>" disabled><br>
                    <input type="text" class="formulario-campo" placeholder="telefone" value="<?php echo $resultado['telefone'] ?>" disabled><br>
                
                </form>
            </div>
        </section>


    </main>
</body>
<?php include './includes/footer.php' ?>

</html>