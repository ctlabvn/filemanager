<?php
namespace FileManager\Controller\Component;

use Cake\Core\Configure;
use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use League\Flysystem\Adapter\Local as LocalAdapter;
use League\Flysystem\Filesystem;

class FilesystemComponent extends Component {

   /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [
        'path' => WWW_ROOT . 'upload'
    ];

	protected $filesystem;

    public function initialize(array $config = [])
    {
        if (Configure::check('FileManager.path')) {
            $this->_defaultConfig['path'] = WWW_ROOT . Configure::read('FileManager.path');
        }
    	if(!$this->filesystem) {
	    	$this->filesystem = new Filesystem(new LocalAdapter($this->_defaultConfig['path']));
    	}
    }

    public function listContents($path = '') {
        return $this->filesystem->listContents($path);
    }
}