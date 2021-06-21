<?php

declare(strict_types=1);

namespace app\core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class BaseView
{
    private Environment $twig;

    public function __construct()
    {
        $loader = new FilesystemLoader(__DIR__ . "/../views");
        $this->twig = new Environment($loader);
    }

    public function render(string $templatePath)
    {
        return $this->twig->render("$templatePath.twig.php");
    }
}
