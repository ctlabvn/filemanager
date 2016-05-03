<?php

use Cake\Core\Configure;

try {
    Configure::load('FileManager.configs', 'default', false);
    if (!Configure::check('FileManager') || !is_array(Configure::read('FileManager')) || !is_array(Configure::read('FileManager.restricted'))) {
    	throw new \Exception('Invalid FileManager configure');
    }
} catch (\Exception $e) {
    exit($e->getMessage() . "\n");
}
