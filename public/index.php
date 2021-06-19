<?php

declare(strict_types=1);

namespace app\core;

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Application();

$app->router->get('/', 'home');
$app->router->get('/contact', 'contact');
$app->router->post('/contact', function () {
    echo "Handling submitted data";
});

$app->run();
