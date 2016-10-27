<?php

namespace MyApi\Controllers;

use Sensorario\WheelFramework\Controllers\Controller;

class DefaultController extends Controller
{
    public function action()
    {
        $response = [
            'message' => 'welcome',
        ];

        return $response;
    }
}
