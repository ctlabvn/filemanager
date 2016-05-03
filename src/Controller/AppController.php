<?php

namespace FileManager\Controller;

use App\Controller\AppController as BaseController;

class AppController extends BaseController {

	public function initialize() {
		parent::initialize();

		$this->loadComponent('FileManager.Filesystem');
		$this->viewBuilder()->layout('FileManager.default');
	}
}
