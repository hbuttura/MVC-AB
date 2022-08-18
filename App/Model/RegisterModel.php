<?php

class RegisterModel
{
    public $idusuario, $usuario, $senha, $senha2;
    public $rows;

    public function save()
    {
        include "DAO/RegisterDAO.php";

        $dao = new RegisterDAO();

        if (empty($this->id))
        {
            $dao->insert($this);
        }
    }
    public function getById(int $id)
    {
        include "DAO/RegisterDAO.php";
        $dao = new RegisterDAO();
        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new RegisterModel();
    }
}