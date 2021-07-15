<?php

declare(strict_types=1);

namespace app\controllers;

use app\core\BaseController;

class AuthController extends BaseController
{
    public function login()
    {
        return $this->render("login");
    }

    public function register()
    {
        return $this->render("register");
    }


    public function handleRegister(){

    }
}
