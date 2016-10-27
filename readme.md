# Wheel basic application

```bash
 ├── app
 │   └── config
 │       └── config.db.php
 ├── src
 │   └── MyApi
 │       ├── Components
 │       │   └── Config.php
 │       └── Controllers
 │           └── DefaultController.php
 ├── web
 │   └── index.php
 ├── composer.json
 ├── composer.lock
 └── readme.md
```

## Controller

```php
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
```

## Create new routes

```php
<?php

namespace MyApi\Components; 

use Sensorario\WheelFramework\Components\Config as SensorarioConfig;

class Config implements SensorarioConfig
{
    public function getConfig($key)
    {
        return array(

            'routes' => array(
                <path> => array(
                    'controller' => <controller>,
                    <http method> => array(
                        'action' => <method>
                    )
                )
            ),

        )[$key];
    }
}
```

If you want to add new json endpoint to show developer information:

```php
'/devel/info' => array(
    'controller' => 'Vendor\\Controllers\\DevelController',
    'GET' => array(
        'action' => 'show'
    )
)
```

## Database

app/config/config.db.php

```php
<?php return array(
    'driver'   => 'pdo_mysql',
    'dbname'   => 'my_api',
    'user'     => 'root',
    'password' => '',
);
```
