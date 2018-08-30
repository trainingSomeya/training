<?php
App::uses('AppController', 'Controller');
/**
 * Tags Controller
 *
 * @property Tag $Tag
 * @property PaginatorComponent $Paginator
 */
class JqtestController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
	}
	public function beforeFilter() {
		    parent::beforeFilter();
		        $this->Auth->allow('index', 'view');
	}
}

