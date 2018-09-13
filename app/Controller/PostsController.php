<?php
App::uses('AppController', 'Controller','Image');
/**
 * Posts Controller
 *
 * @property Post $Post
 * @property PaginatorComponent $Paginator
 */
class PostsController extends AppController {
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Flash','Search.Prg');
//	public $helpers = array('Form','Upload.Upload');

//検索の条件の指定 
	public $presetVars = array(
			array('field' => 'title', 'type' => 'value'),
			array('field' => 'categoryname', 'type' => 'value'),			
			array('field' => 'tagname', 'type' => 'value'),			
		);
/**
 * index method
 *
 * @return void
 */
	public function index() {
		//categoriesテーブルから種別テーブルリストを取得する
		$this->set('list',$this->Post->Category->find('list',array('fields'=>array('name','name'))));
		//tagsテーブルから種別テーブルリストを取得する
		$this->set('tags',$this->Post->Tag->find('list',array('fields'=>array('name','name'))));
		//	$this->Post->recursive = 0; 	//不要な関係データを取り除く（０、belongsToしているモデルだけ残すように）
		$this->Prg->commonProcess();
                $this->paginate =array('conditions' => $this->Post->parseCriteria($this->passedArgs),);
		$this->set('posts', $this->Paginator->paginate());
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('users',$this->Post->User->find('list',array('fields'=>array('id','username'))));
		//categoriesテーブルから種別テーブルリストを取得する
		$this->set('list',$this->Post->Category->find('list',array('fields'=>array('id','name'))));
		//tagsを取得する	
		$this->set('tag',$this->Post->Tag->find('list',array('fields'=>array('id','name')))); 
		//JOINでの接続を試みた		
		/*$tag = $this->Post->find('all',array(
					'joins' => array(array(
							'type' =>'LEFT',
							'alias' => 'PostsTag',
							'table' => 'posts_tags',
							)),
						'conditions' => 'PostTag.post_id = Post.id'
					));	
					$this->set('tag',$tag);*/
		
		if ($this->request->is('post')) {
			$this->Post->create();
			if ($this->Post->saveall($this->request->data)) {
				/*
				ob_start();//チェック
				var_dump($this->request->data);
				$result = ob_get_contents();
				ob_end_clean();
				$fp = fopen("./upload/dump.txt", "a+" );
				fputs($fp, $result);
				fclose( $fp );//	
				 */	
				$this->Flash->success(__('The post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The post could not be saved. Please, try again.'));
			}
		}

	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->set('user',$this->Post->User->find('list',array('fields'=>array('id','username'))));
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Post->save($this->request->data)) {
				$this->Flash->success(__('The post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The post could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
			$this->request->data = $this->Post->find('first', $options);
		}
		$users = $this->Post->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Post->delete()) {
			$this->Flash->success(__('The post has been deleted.'));
		} else {
			$this->Flash->error(__('The post could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('index', 'view');
	}

	public function search(){
	}

}
