<?php 
namespace App\Controller;

use App\Model\LoginModel;

class LoginController extends Controller
{
    public static function form()
    {
        include "./View/modules/Login/FormLogin.php";
        $login = new LoginModel();
        $login->usuario = $_POST['usuario'];
        $login->senha = $_POST['senha'];
        $login->validationUserPassModel();
    }
    public static function val()
    {
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