<?php
 
echo '<h1> Aux change pass.php </h1>';
 
    $usuario = $_POST['usuario'];
    $cpf = $_POST['cpf'];
 
 
    $dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
    $user = 'root';
    $password = '';

    $banco = new PDO($dsn, $user, $password);

    $queryUsuarioSenha = 'SELECT tb_usuario.usuario, tb_pessoa.cpf FROM tb_pessoa INNER JOIN tb_usuario ON tb_pessoa.id = tb_usuario.id_pessoa 
    WHERE tb_usuario.usuario = "' . $usuario . ' "AND tb_pessoa.cpf = "' . $cpf .'"';


    $resultado = $banco-> query($queryUsuarioSenha)->fetch();
 
 
    if (!empty($resultado)&& $resultado != false){ 
        ?>
        
       <html>
       <form action="./changePass_update.php" method="POST">
        <input type="hidden" name="usuario" value="<?php echo $usuario ?>">
        <label for="newPass">Insira a nova senha</label>
        <input type="password" name="newPass" placeholder="Senha" >
        <input type="submit" value="Confirmar">
        </form>
        </html>

        <?php
    }   else {
        header('location:changePass.php');
    }