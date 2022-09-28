<?php
namespace App\Model;

use App\DAO\LoginDAO;

class LoginModel
{
    public $idusuario, $usuario, $senha;
    public $rows;
    public $error = False;

    public function validationUserPassModel()
    {
        $dao = new LoginDAO();
        $dao->validationUserPass($this);
    }
}