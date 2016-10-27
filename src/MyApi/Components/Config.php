<?php

namespace MyApi\Components; 

use Sensorario\WheelFramework\Components\Config as SensorarioConfig;

class Config implements SensorarioConfig
{
    public function getConfig($key)
    {
        return array(

            /** routes */
            'routes' => array(
                '/' => array(
                    'controller' => 'MyApi\\Controllers\\DefaultController',
                    'GET' => array(
                        'action' => 'default'
                    ),
                ),
            ),

            /** services for sensorario/wheel-container */
            'services' => array(
                'manager' => array(
                    'class' => 'Sensorario\\WheelFramework\\Components\\Manager',
                ),
                'router' => array(
                    'class' => 'Sensorario\\WheelFramework\\Components\\Router',
                ),
                'factory' => array(
                    'class' => 'Sensorario\\WheelFramework\\Components\\ResponseFactory',
                ),
            ),

        )[$key];
    }
}
