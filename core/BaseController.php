<?php

declare(strict_types=1);

namespace app\core;

abstract class BaseController
{
    private BaseView $baseView;

    public function __construct()
    {
        $this->baseView = new BaseView();
    }

    public function render(string $templatePath)
    {
        echo $this->baseView->render($templatePath);
    }
}
