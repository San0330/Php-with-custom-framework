<?php

declare(strict_types=1);

namespace app\core\Http;

use Symfony\Component\HttpFoundation\Response;

class MyResponse
{
    public function handler(): Response
    {
        if (!isset($response)) {
            $response = new Response();
            return $response;
        }

        return false;
    }
}
