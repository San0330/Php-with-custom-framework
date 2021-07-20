<?php

declare(strict_types=1);

namespace app\controllers;

use app\core\BaseController;
use symfony\Component\HttpFoundation\Request;

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


    public function handleRegister(Request $req){
       $email = $req->get('email'); 
       $firstName = $req->get("firstName");
       $lastName = $req->get("lastName");
       $password = $req->get("password");
       $confirmPassword = $req->get("confirmPassword");

       if($password !== $confirmPassword){
           echo "Password do not match";
           return;
       }

       echo $email;
       echo $firstName;
       echo $lastName;
       echo $password;
    }
}
