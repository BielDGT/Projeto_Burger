<?php

class Banco
{

    public function conexaoBanco()
    {
        $dsn = 'mysql:dbname=db_damaju;host=127.0.0.1';
        $user = 'root';
        $password = '';

        return $banco = new PDO($dsn, $user, $password);
    }
}
    