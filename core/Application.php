<?php

declare(strict_types=1);

namespace app\core;

use Symfony\Component\HttpFoundation\Request;

class Application
{
    public Router $router;
    public Request $request;

    public function __construct()
    {
        $this->request = (new Request())->createFromGlobals();
        $this->router = new Router($this->request);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}
