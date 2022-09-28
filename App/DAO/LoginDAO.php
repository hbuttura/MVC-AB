<?php
namespace App\DAO;

use App\Model\LoginModel;

class LoginDAO extends DAO
{
    public $conexao;

    public function __construct()
    {
        parent::__construct();
    }

    function validationUserPass(LoginModel $model) {
        $sql = "SELECT usuario, senha FROM usuario WHERE usuario = ? AND senha = ?";
        $stmt = $this->conexao->prepare($sql);
        
        $stmt->bindValue(1, $model->usuario);
        $stmt->bindValue(2, $model->senha);

        $stmt->execute();

        if (empty($stmt->fetchObject())) {
            $model->error == True;
            return header("Location: /login");
        } else {
            $model->error == False;
        }
    }
}