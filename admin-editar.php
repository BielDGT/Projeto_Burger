
<?php
// echo '<h1>Aluno Editar</h1>';

// echo '<pre>';

// var_dump($_POST);

$editarId = $_POST['id'];
$editarNome = $_POST['nome'];
$editarSenha = $_POST['senha'];
$editarCep = $_POST['cep'];
$editarCpf = $_POST['cpf'];
$editarNascimento = $_POST['nascimento'];

$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';

$user = 'root';

$password = '';


$banco = new PDO($dsn, $user, $password);

$update = 'UPDATE tb_clientes set nome = :nome, senha = :senha, cep = :cep, cpf = :cpf, nascimento = :nascimento where id_Clientes = :id' ;


$banco->prepare($update)->execute([
    ':id'=> $editarId,
    ':nome'=>$editarNome,
    ':senha'=>$editarSenha,
    ':cep'=>$editarCep,   
    ':cpf'=>$editarCpf,
    ':nascimento'=>$editarNascimento,
]);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php include './includes/header.php' ?>
<link rel="stylesheet" href="./Assets/css/pagina_admin.css">
<link rel="stylesheet" href="./Assets/css/footer.css">

</head>

<?php
$dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
$user = 'root';
$password = '';
$banco_cliente = new PDO($dsn, $user, $password);

$select = 'SELECT * FROM tb_clientes';

$resultado = $banco_cliente->query($select)->fetch();

?>

<body>
    <main id="container-pagina-usuario" class="text-center">
        <section class="row-pagina-usuario" class="text-center">
            <div class="foto-usuario">
                <img src="./Assets/Fotos/pagina_usuario/usuario.png" alt="icone do usuário" class="foto-usuario">
            </div>
        </section>
        <section class="linha-btn">
            <div class="btn-editar">
                <ol>
                    <li><a href="./pagina_admin_editar.php">Editar</a></li>
                </ol>
            </div>
            <div class="btn-cadastrar">
                <ol>
                <li><a href="./pagina_cadastrar_produto.php">Cadastrar Produto</a></li>

                </ol>
            </div>
            <div class="btn-lista">
                <ol>
                <li><a href="./pagina_lista_produtos.php">Lista de Produtos</a></li>
                </ol>
            </div>
        </section>
        <section class="linha-formulario">
            <div class="formulario">
            <div class="formulario">
                <form>
                    <input type="text" class="formulario-campo" placeholder="Nome" value="<?php echo $resultado['nome'] ?>" disabled><br>
                    <input type="text" class="formulario-campo" placeholder="Email" value="<?php echo $resultado['email'] ?>" disabled><br>
                    <input type="text" class="formulario-campo" placeholder="Senha" value="<?php echo $resultado['senha'] ?>" disabled><br>
                    <input type="text" class="formulario-campo" placeholder="CPF" value="<?php echo $resultado['cpf'] ?>" disabled><br>
                    <input type="text" class="formulario-campo" placeholder="Endereço" value="<?php echo $resultado['cep'] ?>" disabled><br>
                    <input type="text" class="formulario-campo" placeholder="nascimento" value="<?php echo $resultado['nascimento'] ?>" disabled><br>

                </form>
            </div>
        </section>
    </main>
</body>
<?php include './includes/footer.php' ?>
</html>