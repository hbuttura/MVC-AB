<?php
namespace App\Controller;

use App\Model\RegisterModel;

class RegisterController extends Controller
{
    public static function form()
    {

        $model = new RegisterModel();
        
        if(isset($_GET['id']))
            $model = $model->getById((int) $_GET['id']);
        include "./View/modules/Register/FormRegister.php";
    }
    public static function save()
    {

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