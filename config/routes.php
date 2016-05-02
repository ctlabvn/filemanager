<?php
use Cake\Routing\Router;

Router::plugin('FileManager', ['path' => '/file-manager'], function ($routes) {
    $routes->fallbacks('DashedRoute');
});
