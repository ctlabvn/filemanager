<?php
namespace FileManager\View\Helper;

use Cake\View\Helper;
use Cake\View\View;
use Cake\Core\Configure;

/**
 * FileManager helper
 */
class FileManagerHelper extends Helper {
    public $helpers = ['Html'];
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];
    private $base_path;

    public function initialize() {
    	$this->base_path = Configure::read('FileManager.path');
    }

    public function link($relative_path) {
    }
}