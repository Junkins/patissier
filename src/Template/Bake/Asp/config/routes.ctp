<?php
use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::defaultRouteClass('DashedRoute');

Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Tops', 'action' => 'top']);

    // 会員のRoutes設定
    Router::prefix('user', function ($routes) {
        $routes->connect('/', ['controller' => 'Tops', 'action' => 'top']);
        $routes->connect('/:controller', [], ['routeClass' => 'InflectedRoute']);
        $routes->connect('/:controller/:action/*', [], ['routeClass' => 'InflectedRoute']);
    });

    // 管理者のRoutes設定
    Router::prefix('admin', function ($routes) {
        $routes->connect('/', ['controller' => 'Tops', 'action' => 'top']);
        $routes->connect('/:controller', [], ['routeClass' => 'InflectedRoute']);
        $routes->connect('/:controller/:action/*', [], ['routeClass' => 'InflectedRoute']);
    });

    $routes->fallbacks('DashedRoute');
});

Plugin::routes();