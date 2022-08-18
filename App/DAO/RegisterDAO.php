<?php

class RegisterDAO
{
    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=login";
        $user = "root";
        $pass = "9090";

        $this->conexao = new PDO($dsn, $user, $pass);
    }

    function insert(RegisterModel $model)
    {
        $sql = "INSERT INTO usuario (usuario, senha) VALUES (?, ?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->usuario);
        $stmt->bindValue(2, $model->senha);

        $stmt->execute();
    }
    public function selectById($id)
    {
        $sql="SELECT * FROM 'login' WHERE id = ?";

        $stmt = $this-> conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject();
    }
}