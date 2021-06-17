<?php

declare(strict_types=1);

namespace app\core;

use app\core\Request;

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
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();

        $callback = $this->routes[$method][$path] ?? false;

        if (!$callback) {
            return "Not found";
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
            return "404";
        }
    }
}
