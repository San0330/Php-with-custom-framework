<?php

declare(strict_types=1);

namespace app\core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Symfony\Component\HttpFoundation\Request;

class Application
{
    public Router $router;
    public Request $request;
    public Environment $twig;

    public function __construct()
    {
        $loader = new FilesystemLoader(__DIR__ . "/../views");
        $this->twig = new Environment($loader);

        $this->request = (new Request())->createFromGlobals();
        $this->router = new Router($this->request,$this->twig);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}
