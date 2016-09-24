<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::plugin(
    'Patissier',
    ['path' => '/patissier'],
    function (RouteBuilder $routes) {
        $routes->fallbacks('DashedRoute');
    }
);
