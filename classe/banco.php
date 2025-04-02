<?php

class cards
{

    public function conexaoBanco()
    {
        $id = $_GET['id'];

        $dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
        $user = 'root';
        $password = '';

        $banco = new PDO($dsn, $user, $password);

        $script = "SELECT * FROM tb_produtos WHERE id_produtos = $id";

        $dados = $banco->query($script)->fetch();
    }
}
