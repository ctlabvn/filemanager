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
        $contents = $this->Filesystem->listContents();

        $this->set(compact('contents'));
        $this->set('_serialize', ['contents']);
    }
}
