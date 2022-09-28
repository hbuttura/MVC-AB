<?php
namespace App\DAO;

use App\Model\RegisterModel;

class RegisterDAO extends DAO
{
    public $conexao;

    public function __construct()
    {
        parent::__construct();
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