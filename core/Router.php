<?php

declare(strict_types=1);

namespace app\core;

use Symfony\Component\HttpFoundation\Request;
use Twig\Environment;

class Router
{
    protected array $routes = [];
    protected Request $request;
    protected Environment $twig;

    public function __construct(Request $request, Environment $twig)
    {
        $this->request = $request;
        $this->twig = $twig;
    }

    public function get($path, $callback)
    {
        $this->routes['GET'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPathInfo();
        $method = $this->request->getMethod();

        $callback = $this->routes[$method][$path] ?? false;

        if (!$callback) {
            return "404 Not found";
        }

        if (is_string($callback)) {
            return $this->twig->render("$callback.php");
        }

        return call_user_func($callback);
    }
}
