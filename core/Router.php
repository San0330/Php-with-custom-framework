<?php

declare(strict_types=1);

namespace app\core;

use Symfony\Component\HttpFoundation\Request;

class Router
{
    protected array $routes = [];
    protected Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
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
            return $this->renderview($callback);
        }

        return call_user_func($callback);
    }

    public function renderView($view)
    {
        if (file_exists(__DIR__ . "/../views/$view.php")) {
            include_once __DIR__ . "/../views/$view.php";
        } else {
            return "View not found !!!";
        }
    }
}
