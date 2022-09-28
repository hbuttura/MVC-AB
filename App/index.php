<?php

use App\Controller\{RegisterController,
                    LoginController
                    };

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($uri_parse)
{
    case "/register/form":
        RegisterController::form();
    break;
    case "/register/save":
        RegisterController::save();
    break;
    case "/login":
        LoginController::form();
    case "/":
        LoginController::val();
}