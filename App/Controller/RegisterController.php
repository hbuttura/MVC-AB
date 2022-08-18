<?php

class RegisterController
{
    public static function form()
    {
        include "Model/RegisterModel.php";

        $model = new RegisterModel();
        
        if(isset($_GET['id']))
            $model = $model->getById((int) $_GET['id']);
        include "View/Register/FormRegister.php";
    }
    public static function save()
    {
        include "Model/RegisterModel.php";

        $register = new RegisterModel();
        $register->idusuario = $_POST['idusuario'];
        $u = $register->usuario = $_POST['usuario'];
        $a = $register->senha = $_POST['senha'];
        $b = $register->senha = $_POST['senha2'];
        if ($a == $b && $a != "" && $u != "") {
            $register->save();
            header("Location: /login");
        } else {
            header("Location: /register/form");
        }
    }
}