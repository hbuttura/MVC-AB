<?php 

class LoginController {
    public static function form()
    {
        include "Model/LoginModel.php";
        include "View/Login/FormLogin.php";
        $login = new LoginModel();
        $login->usuario = $_POST['usuario'];
        $login->senha = $_POST['senha'];
        $login->validationUserPassModel();
    }
    public static function val()
    {
        include "Model/LoginModel.php";
        $login = new LoginModel();
        $u = $login->usuario = $_POST['usuario'];
        $s = $login->senha = $_POST['senha'];
        if (empty($u) || empty($s)) {
            header('Location: /login');
            exit();
        } else {
            $login->validationUserPassModel();
        }
    }
}