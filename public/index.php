<?php

declare(strict_types=1);

namespace app\core;

require_once __DIR__ . '/../vendor/autoload.php';

use app\controllers\AuthController;
use app\controllers\SiteController;

$app = new Application();

$siteController = new SiteController();

$app->router->get('/', [$siteController, 'home']);
$app->router
    ->get('/contact', [$siteController, 'contact'])
    ->post('/contact', [$siteController, 'handleContact']);
// $app->router->get('/a', 1);

$authController = new AuthController();
$app->router
    ->get("/login", [$authController, 'login'])
    ->post("/login", [$authController, 'handleLogin']);

$app->router
    ->get("/register", [$authController, 'register'])
    ->post("/register", [$authController, 'handleRegister']);

$app->run();
