<?php
App::uses('AppController', 'Controller');

class PagesController extends AppController {

	public $uses = array();

	public function beforeFilter() {
			parent::beforeFilter();
			$this->Auth->allow('index');
	}

	/**
	* Telas administrativas. Sempre iniciadas com 'admin_'
	**/

	public function admin_index() {

	}

	/**
	* Telas do site.
	**/
	public function index() {

	}
}
