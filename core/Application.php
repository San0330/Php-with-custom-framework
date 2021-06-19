<?php

declare(strict_types=1);

namespace app\core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Application
{
    public Router $router;
    public Request $request;
    public Response $response;
    public Environment $twig;

    public function __construct()
    {
        $loader = new FilesystemLoader(__DIR__ . "/../views");
        $this->twig = new Environment($loader);
        
        $this->request = (new Request())->createFromGlobals();
        $this->response = new Response();
        
        $this->router = new Router($this->request,$this->response,$this->twig);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}
