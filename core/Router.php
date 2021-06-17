<?php

declare(strict_types=1);

namespace app\core;

class Router
{
    protected array $routes = [];

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        echo '<pre>routes<br />';
        var_dump($this->routes);
        echo '</pre>';
        echo '<pre>_SERVER<br />';
        var_dump($_SERVER);
        echo '</pre>';
    }
}
