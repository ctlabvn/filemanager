<?php
namespace FileManager\Controller;

use FileManager\Controller\AppController;

/**
 * FileManager Controller
 *
 * @property \FileManager\Model\Table\FileManagerTable $FileManager
 */
class FileManagerController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $fileManager = $this->paginate($this->FileManager);

        $this->set(compact('fileManager'));
        $this->set('_serialize', ['fileManager']);
    }
}
