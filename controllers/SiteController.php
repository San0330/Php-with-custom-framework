<?php

declare(strict_types=1);

namespace app\controllers;

use app\core\BaseController;
use Symfony\Component\HttpFoundation\Request;

class SiteController extends BaseController
{
    public function home()
    {
        $data = [
            "siteName" => "Blog"
        ];

        return $this->render("home",$data);
    }

    public function contact()
    {
        return $this->render("contact");
    }

    public function handleContact(Request $req)
    {
        return var_dump($req->request);        
    }
}
