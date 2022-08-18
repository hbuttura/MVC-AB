<?php

class LoginModel {
    public $idusuario, $usuario, $senha;
    public $rows;

    public function validationUserPassModel()
    {
        include "DAO/LoginDAO.php";

        $dao = new LoginDAO();
        $dao->validationUserPass($this);
    }
}