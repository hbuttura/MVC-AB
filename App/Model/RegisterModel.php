<?php
namespace App\Model;

use App\DAO\RegisterDAO;

class RegisterModel
{
    public $idusuario, $usuario, $senha, $senha2;
    public $rows;

    public function save()
    {
        $dao = new RegisterDAO();

        if (empty($this->id))
        {
            $dao->insert($this);
        }
    }
    public function getById(int $id)
    {
        $dao = new RegisterDAO();
        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new RegisterModel();
    }
}