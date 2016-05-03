<?php
use Cake\Routing\Router;

Router::plugin('FileManager', ['path' => '/file-manager'], function ($routes) {
	$routes->connect('/', ['controller' => 'FileManager', 'action' => 'index']);
    $routes->fallbacks('DashedRoute');
});
