<?php

declare(strict_types=1);

namespace app\core;

require_once __DIR__ . '/../vendor/autoload.php';

use app\controllers\SiteController;

$app = new Application();

$siteController = new SiteController();

$app->router->get('/', [$siteController, 'home']);
$app->router->get('/contact', [$siteController, 'contact']);
$app->router->post('/contact', [$siteController, 'handleContact']);

$app->run();
