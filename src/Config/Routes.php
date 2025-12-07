<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('start-composer', static function () {
    return 'Hello World Composer';
});
