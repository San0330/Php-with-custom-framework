<?php

declare(strict_types=1);

namespace app\core;

abstract class BaseController
{
    private BaseView $baseView;
    private BaseModel $baseModel;

    public function __construct()
    {
        $this->baseView = new BaseView();
        $this->baseModel = new BaseModel();
    }

    public function render(string $templatePath, array $data = [])
    {
        echo $this->baseView->render($templatePath, $data);
    }

    public function getModel()
    {
        return $this->baseModel;
    }
}
