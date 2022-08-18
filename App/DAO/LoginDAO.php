<?php

class LoginDAO
{
    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=login";
        $user = "root";
        $pass = "9090";

        $this->conexao = new PDO($dsn, $user, $pass);
    }

    function validationUserPass(LoginModel $model) {
        $sql = "SELECT idusuario, usuario FROM usuario WHERE usuario = ? AND senha = md5('?')";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->usuario);
        $stmt->bindValue(2, $model->senha);

        $stmt->execute();

    }
}