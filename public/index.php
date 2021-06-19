<?php

declare(strict_types=1);

namespace app\core;

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Application();

$app->router->get('/', function () {
    return 'Hello world';
});

$app->router->get('/contact', 'contact');

$app->run();