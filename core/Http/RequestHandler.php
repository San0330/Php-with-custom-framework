<?php

declare(strict_types=1);

namespace app\core\Http;

use Symfony\Component\HttpFoundation\Request;

class MyRequest
{
    public function handler(): Request
    {
        if (!isset($request)) {
            $request = new Request();
            $create = $request->createFromGlobals();
            return $create;
        }

        return false;
    }
}
