<?php

declare(strict_types=1);

namespace app\core;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Dotenv\Dotenv;

class Application
{
    public Router $router;
    private Request $request;
    private Response $response;
    private BaseView $baseView;
    private BaseModel $baseModel;

    public function __construct()
    {
        $this->loadEnv();

        $this->baseView = new BaseView();
        $this->baseModel = new BaseModel();

        $this->request = (new Request())->createFromGlobals();
        $this->response = new Response();

        $this->router = new Router($this->request, $this->response, $this->baseView);
    }

    public function run()
    {
        echo $this->router->resolve();
    }

    public function getEntityManager()
    {
        return $this->baseModel->getEntityManager();
    }

    private function loadEnv()
    {
        $dotenv = Dotenv::createImmutable(dirname(__DIR__));
        $dotenv->load();
    }
}
