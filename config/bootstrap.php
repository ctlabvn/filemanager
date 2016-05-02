<?php

use Cake\Core\Configure;

try {
    Configure::load('configs', 'default', false);
} catch (\Exception $e) {
    exit($e->getMessage() . "\n");
}
