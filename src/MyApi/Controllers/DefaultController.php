<?php

namespace MyApi\Controllers;

use Sensorario\WheelFramework\Controllers\Controller;

class DefaultController extends Controller
{
    public function default()
    {
        $response = [
            'message' => 'welcome',
        ];

        return $response;
    }
}
