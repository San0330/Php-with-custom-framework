<?php

declare(strict_types=1);

namespace app\core;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Router
{
    private array $routes = [];
    private Request $request;
    private Response $response;
    private BaseView $baseView;

    public function __construct(Request $request, Response $response, BaseView $baseView)
    {
        $this->response = $response;
        $this->request = $request;
        $this->baseView = $baseView;
    }

    public function get($path, $callback)
    {
        $this->routes['GET'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['POST'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPathInfo();
        $method = $this->request->getMethod();

        $callback = $this->routes[$method][$path] ?? false;

        if (!$callback) {
            $this->response->setStatusCode(404)->send();
            return $this->baseView->render("_404");
        }

        if (is_string($callback)) {
            return $this->baseView->render($callback);
        }

        if (is_array($callback)) {
            return call_user_func_array($callback, [$this->request, $this->response]);
        }

        return call_user_func($callback);
    }
}
